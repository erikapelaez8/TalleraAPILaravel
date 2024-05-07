<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('estudiantes', function (Blueprint $table) {
                $table->foreignId('categoria_id') // Nuevo campo para la clave foránea
                    ->constrained('categorias') // Relacionado con la tabla categories
                    ->onDelete('cascade'); // Eliminar estudiantes si se elimina la categoría
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estudiantes', function (Blueprint $table) {
                $table->dropForeign(['categoria_id']); // Eliminar la clave foránea
                $table->dropColumn('categoria_id'); // Eliminar la columna
            });
    }
};
