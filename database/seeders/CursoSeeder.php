<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework de php";
        $curso->categoria = "Desarrollo Web";

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Laravel";
        $curso2->descripcion = "El mejor framework de php";
        $curso2->categoria = "Desarrollo Web";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Laravel";
        $curso3->descripcion = "El mejor framework de php";
        $curso3->categoria = "Desarrollo Web";

        $curso3->save();
    }
}
