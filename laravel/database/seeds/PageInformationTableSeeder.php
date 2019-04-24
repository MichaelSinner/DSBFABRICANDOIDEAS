<?php

use Illuminate\Database\Seeder;

class PageInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_informations')->insert([
            'mision' => 'Somos una empresa dedicada a la fabricación y distribución de artículos de temporada de acuerdo a las tendencias del mercado, apoyados de un gran equipo de trabajo comprometido a fabricar los mejores productos de calidad y durabilidad logrando así satisfacer las necesidades de nuestros clientes.',
            'vision' => 'Trabajaremos día a día para posicionarnos entre las primeras empresas dedicadas al diseño y fabricación de artículos de temporada, ejecutando proyectos eficientes que aporten al crecimiento del mercado local e internacional, generando satisfacción y fidelidad en cada uno de nuestros clientes.',
            'whoarewe' => 'DSB (DISTRIBUCIONES SARMIENTO BERNAL)  Es una empresa virtual de artículos de temporada, fundada en 1999 que marca tendencia, ofreciendo productos de primer nivel y un gran servicio al cliente para quienes compran desde la comodidad de su hogar. Un negocio compuesto por personas innovadoras que siempre miran a futuro. Tenemos el impulso y los medios para actualizar y mejorar cada día la calidad de nuestros productos.
				Bienvenidos.',
            'historical_review' => 'Distripeluches Sarmiento fundada en el 2005 por Sorley Sarmiento Casas, comenzó como una idea familiar de producción de peluches para regalar, ofrecer y vender en calles en pequeños almacenes, con 2 máquinas planas, 4 empleados y pequeños recursos económicos. \n 
				Alrededor de 2008, viendo que los productos se vendían a mayor cantidad, se empezó a invertir en mayores insumos, aumentando a la vez los clientes y centrándose en distribuir en bodegas en San Victorino. Esto dio paso para que en el 2005 diera inicio a la microempresa Distripeluches Sarmiento, donde aumento el número de trabajadores a 10, produciendo con 5 máquinas planas y satélites que facilitaban el trabajo y aumentaban la producción, cortadoras, selladoras, entre otros, en ese momento los productos eran bolsos, peluches para regalar perfumados, los cuales se vendían en gran cantidad.       En el 2010 Distripeluches decide empezar a trabajar en productos  navideños el cual hasta hoy es su dedicación principal, como gorros navideños, maracas decoradas, decoración navideña, muñecos para el árbol navideño (entre otros). \n
				Actualmente la empresa esta ubicada en Bogotá.\n
				En el 2018 cambiamos su nombre a DSB ( Distribuciones Sarmiento Bernal) actualmente Fabricamos ideas, distribuimos en diferentes partes de Colombia como Medellín, Cúcuta, Villavicencio y algunos pueblos cercanos a Bogotá, produce con 15 empleados en la parte operativa y 5 en la parte administrativa, una cadena de satélites, garantizando que hasta el día de hoy cumplan y mejoren la calidad de sus productos.
				'
        ]);
    }
}
