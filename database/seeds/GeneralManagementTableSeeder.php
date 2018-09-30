<?php

use Illuminate\Database\Seeder;

class GeneralManagementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_managements')->insert([
            'name'=>'RECTORÍA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'SECRETARÍA GENERAL',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIVISIÓN ACADÉMICA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIVISIÓN DE INVESTIGACIÓN, DESARROLLO E INNOVACIÓN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIVISIÓN DE EXTENSIÓN DE LA CULTURA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIVISIÓN DE VINCULACIÓN E INTERNACIONALIZACIÓN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'COORDINACIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIRECCIÓN GENERAL DE PLANEACIÓN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIRECCIÓN GENERAL DE COMUNICACIÓN SOCIAL',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'CENTRO DE EDUCACIÓN CONTINUA Y A DISTANCIA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'CENTRO DE LENGUAS',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'COLEGIO DE POSGRADO',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DEFENSOR UNIVERSITARIO',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIRECCIÓN DE BECAS Y APOYO ACADÉMICO',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIRECCIÓN GENERAL DE EVALUACIÓN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIRECCIÓN GENERAL JURÍDICA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA PREPARATORIA DE IXTLAHUACO',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA PREPARATORIA DE TLAXCOAPAN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 1',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 2',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 3',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 4',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE ACTOPAN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE APAN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE ATOTONILCO DE TULA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE CD. SAHAGÚN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE HUEJUTLA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE TEPEJI DEL RIO',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE TIZAYUCA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE TLAHUELILPAN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'ESCUELA SUPERIOR DE ZIMAPAN',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'INSTITUTO DE ARTES',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'INSTITUTO DE CIENCIAS AGROPECUARIAS',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'INSTITUTO DE CIENCIAS BÁSICAS E INGENIERIA',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'INSTITUTO DE CIENCIAS DE LA SALUD',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'INSTITUTO DE CIENCIAS ECONÓMICO ADMINISTRATIVAS',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'INSTITUTO DE CIENCIAS SOCIALES Y HUMANIDADES',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'PATRONATO UNIVERSITARIO',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'CONTRALORIA GENERAL',
            'created_at'=>now()
        ]);

        DB::table('general_managements')->insert([
            'name'=>'DIRECCIÓN DE ENLACE INSTITUCIONAL',
            'created_at'=>now()
        ]);
    }
}
