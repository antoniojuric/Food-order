<?php
use App\Food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//Rostilj

        Food::create([
            'name' => 'Mjesano meso',
			'price' => 15,
			'food_category_id' => 1,
			'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/80/49/93/konoba-bascine.jpg',
        ]);

		Food::create([
            'name' => 'Cevapi',
			'price' => 7.5,
			'food_category_id' => 1,
			'photo' => 'https://poskok.info/wp-content/uploads/2018/04/mrp09iOj_evapi_475_316_85_s_c1.jpg',
        ]);

		Food::create([
            'name' => 'Pljeskavica',
			'price' => 8,
			'food_category_id' => 1,
			'photo' => 'https://static.juznasrbija.info/files/pljeskavica1.jpg',
        ]);
		
		Food::create([
            'name' => 'Punjena pljeskavica',
			'price' => 11,
			'food_category_id' => 1,
			'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/07/e5/c4/28/gurmanska-pljeskavica.jpg',
        ]);

		Food::create([
            'name' => 'Domace kobasice',
			'price' => 8,
			'food_category_id' => 1,
			'photo' => 'https://www.stvarukusa.rs/sites/default/files/styles/w400/public/article/main_images/domace_kobasice.jpg',
        ]);

		Food::create([
            'name' => 'Raznjici',
			'price' => 11,
			'food_category_id' => 1,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/3/b/3bc8a26bf5369d714f98d5b504907ae8_header.jpg?v=2',
        ]);

		Food::create([
            'name' => 'Svinjski vrat',
			'price' => 10,
			'food_category_id' => 1,
			'photo' => 'https://domacirecepti.net/wp-content/uploads/2016/03/svinjski-vrat-iz-rerne.jpg',
        ]);

		Food::create([
            'name' => 'Teleci kotleti',
			'price' => 12,
			'food_category_id' => 1,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/f/9/f9b7fa3714452427f6934bd629277b4b_view_l.png?v=1',
        ]);

		Food::create([
            'name' => 'Svinjska kremenadla',
			'price' => 10,
			'food_category_id' => 1,
			'photo' => 'http://hrono-ishrana.rs/wp-content/uploads/2015/09/kremenadla.jpg',
        ]);

		Food::create([
            'name' => 'Pileci fileti',
			'price' => 8.5,
			'food_category_id' => 1,
			'photo' => 'https://www.lidlovakuhinja.hr/var/lidl-recipes/storage/images/croatia/recipes/pileci-file-s-rostilja/129878-1-cro-HR/Pileci-file-s-rostilja_image1200x630.jpg',
        ]);

		Food::create([
            'name' => 'Krila',
			'price' => 8,
			'food_category_id' => 1,
			'photo' => 'http://www.domacica.com/wp-content/uploads/2015/06/pileca-krilca-u-marinadi1.jpg',
        ]);

		//Pizza

		Food::create([
            'name' => 'Margarita',
			'price' => 8,
			'food_category_id' => 2,
			'photo' => 'http://www.dabruno.com/contenido/pagina163-1.jpg',
        ]);

		Food::create([
            'name' => 'Capriciossa',
			'price' => 10,
			'food_category_id' => 2,
			'photo' => 'https://www.silviocicchi.com/pizzachef/wp-content/uploads/2016/08/1445106094-1443095210-2T2J9143.jpg',
        ]);

		Food::create([
            'name' => 'Funghi',
			'price' => 8,
			'food_category_id' => 2,
			'photo' => 'https://previews.123rf.com/images/bogonet/bogonet1204/bogonet120400022/13179599-pizza-funghi-with-extra-cheese-and-mushrooms-isolated.jpg',
        ]);

		Food::create([
            'name' => 'Vegetale',
			'price' => 8,
			'food_category_id' => 2,
			'photo' => 'https://d1bjorv296jxfn.cloudfront.net/s3fs-public/styles/recipes_header_image/public/772-Fresh-Vegetable-Pizza.jpg?itok=yxMGCA0b',
        ]);

		Food::create([
            'name' => 'Pizza Capri',
			'price' => 10,
			'food_category_id' => 2,
			'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/0a/1b/0d/21/shrimp-pesto-pizza.jpg',
        ]);

		Food::create([
            'name' => 'Calzone',
			'price' => 10,
			'food_category_id' => 2,
			'photo' => 'http://1.bp.blogspot.com/-UK3-Iad3amo/TyyfkNuD6HI/AAAAAAAAOXg/PTgpyiFv4dM/s640/6814453093_c4ccf96ea4_o.jpg',
        ]);

		Food::create([
            'name' => 'Fruti di mare',
			'price' => 11,
			'food_category_id' => 2,
			'photo' => 'https://c1.staticflickr.com/2/1239/1140742822_61ab64f391_b.jpg',
        ]);

		Food::create([
            'name' => 'Napolitana',
			'price' => 12,
			'food_category_id' => 2,
			'photo' => 'https://laromanche.com/wp-content/uploads/2018/04/napolitana.jpg',
        ]);

		Food::create([
            'name' => 'Toscana',
			'price' => 12,
			'food_category_id' => 2,
			'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/0a/55/56/eb/pizza-toscana.jpg',
        ]);

		//Juha

		Food::create([
            'name' => 'Goveda juha',
			'price' => 15,
			'food_category_id' => 3,
			'photo' => 'https://gastro.24sata.hr/media/img/ff/3e/2e1f756c204f756855c4.jpeg',
        ]);

		Food::create([
            'name' => 'Krem juha',
			'price' => 15,
			'food_category_id' => 3,
			'photo' => 'https://www.trudnoca.hr/wp-content/uploads/2014/03/juha-od-povrca-2-454x235.jpg?x97928',
        ]);

		Food::create([
            'name' => 'Juha s povrcem',
			'price' => 8,
			'food_category_id' => 3,
			'photo' => 'https://dobartek.spar.hr/files/g/1-507/700x390-4/pileca-juha-povrce.jpg',
        ]);

		//Salate

		Food::create([
            'name' => 'Sopska',
			'price' => 4,
			'food_category_id' => 4,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/6/2/62124d7434327d1a13adf97c70335f21_view_l.jpg?v=5',
        ]);

		Food::create([
            'name' => 'Kupus',
			'price' => 2.5,
			'food_category_id' => 4,
			'photo' => 'http://gurmanija.com/wp-content/uploads/2016/10/IMG_9561-848x400.jpg',
        ]);

		Food::create([
            'name' => 'Zelena',
			'price' => 2.5,
			'food_category_id' => 4,
			'photo' => 'https://i2.wp.com/www.banjaluka.com/wp-content/uploads/2014/03/salata.jpg?resize=440%2C284&ssl=1',
        ]);

		Food::create([
            'name' => 'Krastavci',
			'price' => 2.5,
			'food_category_id' => 4,
			'photo' => 'https://www.savjetnica.com/wp-content/uploads/2010/08/salata-od-krastavaca.jpg',
        ]);

		Food::create([
            'name' => 'Sezonska salata',
			'price' => 2.5,
			'food_category_id' => 4,
			'photo' => 'http://www.konobatinel.rs/slike/artikli/Sezonska%20salata_1381500828.jpg',
        ]);

		Food::create([
            'name' => 'Kiseli krastavci',
			'price' => 2.5,
			'food_category_id' => 4,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/6/2/62d1b3cb9d7d01aaa4cde5045d8355d6_header.jpg?v=0',
        ]);

		Food::create([
            'name' => 'Kiseli kupus',
			'price' => 2.5,
			'food_category_id' => 4,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/d/6/d61c7943c17915c4afc04c09b4f4274f_view_l.jpg?v=3',
        ]);

		Food::create([
            'name' => 'Mjesana salata',
			'price' => 3,
			'food_category_id' => 4,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/6/0/6007f1c355c5ae2b66dc8017821fdc10_header.jpg?v=6',
        ]);

		//Rizota

		Food::create([
            'name' => 'Rizoto crni',
			'price' => 12,
			'food_category_id' => 5,
			'photo' => 'http://lifepressmagazin.com/wp-content/uploads/2014/01/crni-ri%C5%BEoto.jpg',
        ]);

		Food::create([
            'name' => 'Rizoto sa plodovima mora',
			'price' => 12,
			'food_category_id' => 5,
			'photo' => 'https://www.santamaria.hr/wp-content/uploads/2017/07/rizoto-s-plodovima-mora-2.jpg',
        ]);

		//Tjestenine

		Food::create([
            'name' => 'Spaghetti Bolognese',
			'price' => 8,
			'food_category_id' => 6,
			'photo' => 'https://www.gastronomija.hr/wp-content/uploads/2012/03/spageti-bolonjeze_Olga-Miltsova.jpg',
        ]);

		Food::create([
            'name' => 'Spaghetti Carbonara',
			'price' => 8,
			'food_category_id' => 6,
			'photo' => 'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--1001491_11.jpg?itok=-ns0A_kt',
        ]);

		Food::create([
            'name' => 'Frutti di mare',
			'price' => 9,
			'food_category_id' => 6,
			'photo' => 'https://www.tribugolosa.com/media/t_123_53305_6832_crop.png/rh/tagliatelle-cremose-ai-frutti-di-mare.jpg',
        ]);

		Food::create([
            'name' => 'Makaroni sa piletinom',
			'price' => 9,
			'food_category_id' => 6,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/7/d/7d672b752dcea8a5d8157f6c877667ce_view_l.jpg?v=0',
        ]);

		Food::create([
            'name' => 'Tagliatelle s kozicama',
			'price' => 9,
			'food_category_id' => 6,
			'photo' => 'https://coolinarika.azureedge.net/images/_variations/d/6/d6c66660349705c2899ba35003f75070_view_l.jpg?v=1',
        ]);
    }
}
