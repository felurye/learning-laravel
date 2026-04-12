<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangePublicadoToBooleanInCursosTable extends Migration
{
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->boolean('publicado_novo')->default(false)->after('publicado');
        });

        DB::table('cursos')->where('publicado', 'sim')->update(['publicado_novo' => true]);

        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('publicado');
        });

        Schema::table('cursos', function (Blueprint $table) {
            $table->renameColumn('publicado_novo', 'publicado');
        });
    }

    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->enum('publicado_old', ['sim', 'nao'])->default('nao')->after('publicado');
        });

        DB::table('cursos')->where('publicado', true)->update(['publicado_old' => 'sim']);
        DB::table('cursos')->where('publicado', false)->update(['publicado_old' => 'nao']);

        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('publicado');
        });

        Schema::table('cursos', function (Blueprint $table) {
            $table->renameColumn('publicado_old', 'publicado');
        });
    }
}
