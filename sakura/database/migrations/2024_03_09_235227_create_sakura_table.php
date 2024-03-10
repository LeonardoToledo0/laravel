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
            // Funcionários
            $table->id('FuncionarioID');
            $table->string('Nome');
            $table->string('Cargo');
            $table->decimal('Salario', 10, 2);
            $table->date('DataContratacao');
            $table->timestamps();
        });

        // Categorias
        $this->createTableIfNotExists('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
        // Pratos
        $this->createTableIfNotExists('pratos', function (Blueprint $table) {
            $table->id('PratoID');
            $table->string('NomePrato');
            $table->string('Foto')->nullable();
            $table->text('DescricaoPrato');
            $table->decimal('PrecoPrato', 10, 2);
            $table->foreignId('categoria_id')->constrained('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
        // Bebibas
        $this->createTableIfNotExists('bebidas', function (Blueprint $table) {
            $table->id('BebidaID');
            $table->string('NomeBebida');
            $table->string('Foto')->nullable();
            $table->text('DescricaoBebida');
            $table->decimal('PrecoBebida', 10, 2);
            $table->foreignId('categoria_id')->constrained('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
        // Sobremesa
        $this->createTableIfNotExists('sobremesas', function (Blueprint $table) {
            $table->id('SobremesaID');
            $table->string('NomeSobremesa');
            $table->string('Foto')->nullable();
            $table->text('DescricaoSobremesa');
            $table->decimal('PrecoSobremesa', 10, 2);
            $table->foreignId('categoria_id')->constrained('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
        //Mesas 
        $this->createTableIfNotExists('mesas', function (Blueprint $table) {
            $table->id('MesaID');
            $table->integer('NumeroMesa');
            $table->integer('CapacidadeMesa');
            $table->string('StatusMesa');
            $table->timestamps();
        });
        // Emails 
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
        // Reservas
        $this->createTableIfNotExists('reservas', function (Blueprint $table) {
            $table->id('ReservaID');
            $table->string('ClienteReserva');
            $table->string('EmailClienteReserva');
            $table->date('DataReserva');
            $table->time('HoraReserva');
            $table->integer('NumeroPessoasReserva');
            $table->string('StatusReserva');
            $table->foreignId('MesaIDReserva')->constrained('mesas', 'MesaID')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('EmailIDReserva')->constrained('emails', 'EmailID')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        //Faturamento
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
        Schema::dropIfExists('emails');
        Schema::dropIfExists('faturamento');
        Schema::dropIfExists('reservas');
        Schema::dropIfExists('mesas');
        Schema::dropIfExists('sobremesas');
        Schema::dropIfExists('bebidas');
        Schema::dropIfExists('pratos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('sakura');
    }

    /**
     * Create the table if it does not exist.
     *
     * @param  string    $tableName
     * @param  \Closure  $callback
     * @return void
     */
    private function createTableIfNotExists(string $tableName, \Closure $callback): void
    {
        if (!Schema::hasTable($tableName)) {
            Schema::create($tableName, $callback);
        }
    }
};
