<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function root()
    {
        return view('home1');
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second)
    {
        if ($first === 'empresas' && $second !== 'index') {
            $empresa = collect(config('contenido.empresas'))->get($second);
            abort_unless($empresa, 404);
            $empresa['slug'] = $second;

            return view('empresas.ficha', compact('empresa'));
        }

        if ($first === 'inversiones' && $second !== 'index') {
            $vertical = collect(config('contenido.verticales'))->get($second);
            abort_unless($vertical, 404);
            $vertical['slug'] = $second;

            $proyectos = collect(config('contenido.proyectos'))
                ->filter(fn ($p) => $p['vertical'] === $second)
                ->map(function ($p, $slug) {
                    $p['slug'] = $slug;

                    return $p;
                })
                ->values();

            return view('inversiones.vertical', compact('vertical', 'proyectos'));
        }

        return view($first . '.' . $second);
    }

    /**
     * third level route
     */
    public function thirdLevel(Request $request, $first, $second, $third)
    {
        if ($first === 'inversiones') {
            $proyecto = collect(config('contenido.proyectos'))->get($third);
            abort_unless($proyecto && $proyecto['vertical'] === $second, 404);
            $proyecto['slug'] = $third;

            $vertical = collect(config('contenido.verticales'))->get($second);
            $vertical['slug'] = $second;

            $empresa = isset($proyecto['empresa'])
                ? collect(config('contenido.empresas'))->get($proyecto['empresa'])
                : null;
            if ($empresa) {
                $empresa['slug'] = $proyecto['empresa'];
            }

            return view('inversiones.proyecto', compact('proyecto', 'vertical', 'empresa'));
        }

        return view($first . '.' . $second . '.' . $third);
    }
}
