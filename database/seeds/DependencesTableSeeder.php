<?php

use Illuminate\Database\Seeder;

class DependencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependences')->insert([
            'name'=>'SECRETARÍA DE ACUERDOS',
            'general_management_id'=>'1',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'RECTORÍA',
            'general_management_id'=>'1',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'SECRETARÍA PRIVADA',
            'general_management_id'=>'1',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'SECRETARÍA PARTICULAR',
            'general_management_id'=>'1',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ASESORÍA DE LA RECTORÍA',
            'general_management_id'=>'1',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'UNIDAD DE TRANSPARENCIA',
            'general_management_id'=>'1',
            'created_at'=>now()
        ]);
//grupo2
        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DEL CENTRO DE EXTENSIÓN UNIVERSITARIA',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'SECRETARÍA GENERAL',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DEL HOTEL UNIVERSITARIO',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN  CENTRO CULTURAL LA GARZA',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE SERVICIOS MÉDICOS UNIVERSITARIOS',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE PROTECCIÓN CIVIL UNIVERSITARIA',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE EVENTOS ESPECIALES',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE ARCHIVO GENERAL',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE ADMINISTRACIÓN ESCOLAR',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DE LAS TORRES DE RECTORÍA',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DE CIUDAD DEL CONOCIMIENTO',
            'general_management_id'=>'2',
            'created_at'=>now()
        ]);
//grupo3
        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE AUTOAPRENDIZAJE DE IDIOMAS',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE BIBLIOTECAS Y CENTROS DE INFORMACIÓN',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE EDUCACIÓN MEDIA SUPERIOR',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE EDUCACIÓN SUPERIOR',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE ESTUDIOS DE PERTINENCIA, FACTIBILIDAD Y VIABILIDAD',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE INNOVACIÓN ACADÉMICA',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE LABORATORIOS Y TALLERES',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE SERVICIOS ACADÉMICOS',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE SUPERACIÓN ACADÉMICA',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE TUTORÍAS',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DEL BIOTERIO',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DEL CENTRO COMPUTO ACADÉMICO',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIVISIÓN ACADÉMICA',
            'general_management_id'=>'3',
            'created_at'=>now()
        ]);
//grupo4
        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE DESARROLLO DE CAPITAL HUMANO PARA LA INVESTIGACIÓN',
            'general_management_id'=>'4',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE DESARROLLO E INNOVACIÓN',
            'general_management_id'=>'4',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE INVESTIGACIÓN',
            'general_management_id'=>'4',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE TRANSFERENCIA DE TECNOLOGÍA',
            'general_management_id'=>'4',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DEL PARQUE CIENTÍFICO Y TECNOLÓGICO',
            'general_management_id'=>'4',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIVISIÓN DE INVESTIGACIÓN, DESARROLLO E INNOVACIÓN',
            'general_management_id'=>'4',
            'created_at'=>now()
        ]);
//grupo5
        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE EDICIONES Y PUBLICACIONES',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE FOMENTO A LA LECTURA',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE PROMOCIÓN CULTURAL',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE PROMOCIÓN DEPORTIVA',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DEL FINI',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'FERIA UNIVERSITARIA DEL LIBRO',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIVISIÓN DE EXTENSIÓN DE LA CULTURA',
            'general_management_id'=>'5',
            'created_at'=>now()
        ]);
//grupo6
        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DE LIBRERÍA UNIVERSITARIA CARÁCTER',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DE VILLA DEPORTIVA',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ADMINISTRACIÓN DEL CENTRO DE NEGOCIOS',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE EDITORIAL UNIVERSITARIA',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE IMAGEN Y MERCADOTECNIA',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE INTERNACIONALIZACIÓN',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE RELACIONES INTERINSTITUCIONALES',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE RELACIONES INTERNACIONALES E INTERCAMBIO ACADÉMICO',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE RELACIONES PÚBLICAS',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE SERVICIO SOCIAL, PRÁCTICAS PROFESIONALES Y VINCULACIÓN LABORAL',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE VINCULACIÓN CON EGRESADOS',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIVISIÓN DE VINCULACIÓN E INTERNACIONALIZACIÓN',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'UNIDAD DE APOYO A LA INTERNACIONALIZACIÓN',
            'general_management_id'=>'6',
            'created_at'=>now()
        ]);
//grupo7
        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE ADMINISTRACIÓN DE PERSONAL',
            'general_management_id'=>'7',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE RECURSOS FINANCIEROS',
            'general_management_id'=>'7',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE RECURSOS MATERIALES',
            'general_management_id'=>'7',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE SERVICIOS GENERALES',
            'general_management_id'=>'7',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'COORDINACIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'general_management_id'=>'7',
            'created_at'=>now()
        ]);
//grupo8
        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE ESTUDIOS ESTRATÉGICOS Y DESARROLLO INSTITUCIONAL',
            'general_management_id'=>'8',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE GESTIÓN DE LA CALIDAD',
            'general_management_id'=>'8',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE INFORMACIÓN Y SISTEMAS',
            'general_management_id'=>'8',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE PROYECTOS Y OBRAS',
            'general_management_id'=>'8',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN GENERAL DE PLANEACIÓN',
            'general_management_id'=>'8',
            'created_at'=>now()
        ]);
//grupo9
        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE COMUNICACIÓN SOCIAL',
            'general_management_id'=>'9',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE DIVULGACIÓN DE LA CIENCIA',
            'general_management_id'=>'9',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE RADIO UNIVERSIDAD',
            'general_management_id'=>'9',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE TECNOLOGÍAS WEB Y WEBOMETRÍA',
            'general_management_id'=>'9',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN GENERAL DE COMUNICACIÓN SOCIAL',
            'general_management_id'=>'9',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE COMUNICACIÓN SOCIAL',
            'general_management_id'=>'9',
            'created_at'=>now()
        ]);
//grupo MICELANEO
        DB::table('dependences')->insert([
            'name'=>'CENTRO DE EDUCACIÓN CONTINUA Y A DISTANCIA',
            'general_management_id'=>'10',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'CENTRO DE LENGUAS',
            'general_management_id'=>'11',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'COLEGIO DE POSGRADO',
            'general_management_id'=>'12',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DEFENSOR UNIVERSITARIO',
            'general_management_id'=>'13',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE BECAS Y APOYO ACADÉMICO',
            'general_management_id'=>'14',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN GENERAL DE EVALUACIÓN',
            'general_management_id'=>'15',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN GENERAL JURÍDICA',
            'general_management_id'=>'16',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA PREPARATORIA DE IXTLAHUACO',
            'general_management_id'=>'17',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA PREPARATORIA DE TLAXCOAPAN',
            'general_management_id'=>'18',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 1',
            'general_management_id'=>'19',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 2',
            'general_management_id'=>'20',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 3',
            'general_management_id'=>'21',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA PREPARATORIA No. 4',
            'general_management_id'=>'22',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE ACTOPAN',
            'general_management_id'=>'23',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE APAN',
            'general_management_id'=>'24',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE ATOTONILCO DE TULA',
            'general_management_id'=>'25',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE CD. SAHAGÚN',
            'general_management_id'=>'26',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE HUEJUTLA',
            'general_management_id'=>'27',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE TEPEJI DEL RIO',
            'general_management_id'=>'28',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE TIZAYUCA',
            'general_management_id'=>'29',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE TLAHUELILPAN',
            'general_management_id'=>'30',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'ESCUELA SUPERIOR DE ZIMAPAN',
            'general_management_id'=>'31',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'INSTITUTO DE ARTES',
            'general_management_id'=>'32',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'INSTITUTO DE CIENCIAS AGROPECUARIAS',
            'general_management_id'=>'33',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'INSTITUTO DE CIENCIAS BÁSICAS E INGENIERIA',
            'general_management_id'=>'34',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'INSTITUTO DE CIENCIAS DE LA SALUD',
            'general_management_id'=>'35',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'INSTITUTO DE CIENCIAS ECONÓMICO ADMINISTRATIVAS',
            'general_management_id'=>'36',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'INSTITUTO DE CIENCIAS SOCIALES Y HUMANIDADES',
            'general_management_id'=>'37',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'PATRONATO UNIVERSITARIO',
            'general_management_id'=>'38',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'CONTRALORIA GENERAL',
            'general_management_id'=>'39',
            'created_at'=>now()
        ]);

        DB::table('dependences')->insert([
            'name'=>'DIRECCIÓN DE ENLACE INSTITUCIONAL',
            'general_management_id'=>'40',
            'created_at'=>now()
        ]);

    }
}