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
        $this->createTableIfNotExists('sakura', function (Blueprint $table) {
            // Funcionarios
            $table->id('FuncionarioID');
            $table->string('Nome');
            $table->string('Cargo');
            $table->decimal('Salario', 10, 2);
            $table->date('DataContratacao');
            $table->timestamps();
        });

        $this->createTableIfNotExists('pratos', function (Blueprint $table) {
            $table->id('PratoID');
            $table->string('NomePrato');
            $table->text('DescricaoPrato');
            $table->decimal('PrecoPrato', 10, 2);
            $table->string('CategoriaPrato');
            $table->timestamps();
        });

        $this->createTableIfNotExists('bebidas', function (Blueprint $table) {
            $table->id('BebidaID');
            $table->string('NomeBebida');
            $table->text('DescricaoBebida');
            $table->decimal('PrecoBebida', 10, 2);
            $table->timestamps();
        });

        $this->createTableIfNotExists('sobremesas', function (Blueprint $table) {
            $table->id('SobremesaID');
            $table->string('NomeSobremesa');
            $table->text('DescricaoSobremesa');
            $table->decimal('PrecoSobremesa', 10, 2);
            $table->timestamps();
        });

        $this->createTableIfNotExists('mesas', function (Blueprint $table) {
            $table->id('MesaID');
            $table->integer('NumeroMesa');
            $table->integer('CapacidadeMesa');
            $table->string('StatusMesa');
            $table->timestamps();
        });
        $this->createTableIfNotExists('emails', function (Blueprint $table) {
            $table->id('EmailID');
            $table->string('RemetenteEmail');
            $table->string('DestinatarioEmail');
            $table->string('AssuntoEmail');
            $table->text('CorpoEmail');
            $table->dateTime('DataEnvioEmail');
            $table->string('StatusEmail');
            $table->timestamps();
        });
        $this->createTableIfNotExists('reservas', function (Blueprint $table) {
            $table->id('ReservaID');
            $table->string('ClienteReserva');
            $table->string('EmailClienteReserva');
            $table->date('DataReserva');
            $table->time('HoraReserva');
            $table->integer('NumeroPessoasReserva');
            $table->string('StatusReserva');
            $table->foreignId('MesaIDReserva')->constrained('mesas');
            $table->foreignId('EmailIDReserva')->constrained('emails');
            $table->timestamps();
        });


        $this->createTableIfNotExists('faturamento', function (Blueprint $table) {
            $table->id('FaturaID');
            $table->date('DataFatura');
            $table->decimal('ValorTotalFatura', 10, 2);
            $table->foreignId('FuncionarioIDFatura')->constrained('sakura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sakura');
        Schema::dropIfExists('pratos');
        Schema::dropIfExists('bebidas');
        Schema::dropIfExists('sobremesas');
        Schema::dropIfExists('mesas');
        Schema::dropIfExists('reservas');
        Schema::dropIfExists('faturamento');
        Schema::dropIfExists('emails');
    }

    /**
     * Create the table if it does not exist.
     *
     * @param  string    $tableName
     * @param  \Closure  $callback
     * @return void
     */
    private function createTableIfNotExists(string $tableName, Closure $callback): void
    {
        if (!Schema::hasTable($tableName)) {
            Schema::create($tableName, $callback);
        }
    }
};
