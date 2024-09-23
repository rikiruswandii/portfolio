<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('app.name', 'My Portfolio');
        $this->migrator->add('app.email', 'rikiruswandi28@gmail.com');
        $this->migrator->add('app.phone', '083126190383');
        $this->migrator->add('app.address', 'Jl. Raya Sukatani');
        $this->migrator->add('app.logo', null);
        $this->migrator->add('app.about', 'Halo! Saya [Nama Anda], seorang web developer berpengalaman dengan keahlian dalam mengembangkan aplikasi web yang responsif dan user-friendly. Saya memiliki kemampuan dalam berbagai teknologi modern, seperti HTML, CSS, JavaScript, dan framework populer seperti Laravel, React, serta Node.js.');
    }
};