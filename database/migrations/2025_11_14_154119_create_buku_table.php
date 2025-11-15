public function up()
{
    Schema::create('buku', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->integer('tahun');
        $table->timestamps();
    });
}
