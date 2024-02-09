<?php

namespace Database\Seeders;

use App\Models\Drug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            //ادوية التصنيف الاول
            Drug::create([
                'scientificName'=>'dextromethorphan',
                'commercialName'=>'Babee Cof',
                'manufacturer'=>'Johson',
                'quantity'=>'50',
                'expirationDate'=>'2025-12-02',
                'price'=>'5000',
                'classifications_Id'=>'1',
                'store_houses_Id'=>'1',
                ]);
                Drug::create([
                    'scientificName'=>'benzonatate',
                    'commercialName'=>'Tessalon',
                    'manufacturer'=>'pfizer',
                    'quantity'=>'100',
                    'expirationDate'=>'2026-1-01',
                    'price'=>'8000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'1',
                ]);
                Drug::create([
                    'scientificName'=>'benzonatate',
                    'commercialName'=>'Zonatuss',
                    'manufacturer'=>'Novartis',
                    'quantity'=>'50',
                    'expirationDate'=>'2025-5-05',
                    'price'=>'5000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'1',
                ]);
                Drug::create([
                    'scientificName'=>'dextromethorphan',
                'commercialName'=>'Silphen DM',
                'manufacturer'=>'Merck',
                'quantity'=>'50',
                'expirationDate'=>'2026-10-02',
                'price'=>'10000',
                'classifications_Id'=>'1',
                'store_houses_Id'=>'1',
                ]);
                Drug::create([
                    'scientificName'=>'dextromethorphan',
                    'commercialName'=>'Hold',
                    'manufacturer'=>'Roche',
                    'quantity'=>'50',
                    'expirationDate'=>'2024-12-12',
                    'price'=>'6000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'1',
                ]);
                Drug::create([
                    'scientificName'=>'dextromethorphan',
                    'commercialName'=>'Creomulsion',
                    'manufacturer'=>'Johson',
                    'quantity'=>'80',
                    'expirationDate'=>'2027-2-02',
                    'price'=>'9000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'1',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                        'commercialName'=>'Delsym',
                        'manufacturer'=>'pfizer',
                        'quantity'=>'40',
                        'expirationDate'=>'2026-10-01',
                        'price'=>'8000',
                        'classifications_Id'=>'1',
                        'store_houses_Id'=>'1',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                        'commercialName'=>'Sucrets Cough',
                        'manufacturer'=>'Novartis',
                        'quantity'=>'50',
                        'expirationDate'=>'2026-9-03',
                        'price'=>'10000',
                        'classifications_Id'=>'1',
                        'store_houses_Id'=>'1',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                    'commercialName'=>'Creomulsion',
                    'manufacturer'=>'Merck',
                    'quantity'=>'60',
                    'expirationDate'=>'2026-9-09',
                    'price'=>'10000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'1',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                        'commercialName'=>'Buckleys Mixture',
                        'manufacturer'=>'Roche',
                        'quantity'=>'50',
                        'expirationDate'=>'2025-4-12',
                        'price'=>'5500',
                        'classifications_Id'=>'1',
                        'store_houses_Id'=>'1',
                    ]);
                    
                    //ادوية التصنيف الثاني
                    Drug::create([
                        'scientificName'=>'amisulpride',
                        'commercialName'=>'Domperidone',
                        'manufacturer'=>'Johson',
                        'quantity'=>'50',
                        'expirationDate'=>'2025-12-02',
                        'price'=>'5000',
                        'classifications_Id'=>'2',
                        'store_houses_Id'=>'1',
                        ]);
                        Drug::create([
                            'scientificName'=>'benzonatate',
                            'commercialName'=>'Driminate',
                            'manufacturer'=>'pfizer',
                            'quantity'=>'100',
                            'expirationDate'=>'2026-1-01',
                            'price'=>'8000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'1',
                        ]);
                        Drug::create([
                            'scientificName'=>'palonosetron',
                            'commercialName'=>'Dramamine',
                            'manufacturer'=>'Novartis',
                            'quantity'=>'50',
                            'expirationDate'=>'2025-5-05',
                            'price'=>'5000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'1',
                        ]);
                        Drug::create([
                            'scientificName'=>'palonosetron',
                        'commercialName'=>'Dansetron',
                        'manufacturer'=>'ِAbbott',
                        'quantity'=>'50',
                        'expirationDate'=>'2026-10-02',
                        'price'=>'10000',
                        'classifications_Id'=>'2',
                        'store_houses_Id'=>'1',
                        ]);
                        Drug::create([
                            'scientificName'=>'dronabinol',
                            'commercialName'=>'Navidoxine',
                            'manufacturer'=>'Roche',
                            'quantity'=>'50',
                            'expirationDate'=>'2024-12-12',
                            'price'=>'6000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'1',
                        ]);
                        Drug::create([
                            'scientificName'=>' lorazepam',
                            'commercialName'=>'Foumidal',
                            'manufacturer'=>'Johson',
                            'quantity'=>'80',
                            'expirationDate'=>'2027-2-02',
                            'price'=>'9000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'1',
                            ]);
                            Drug::create([
                                'scientificName'=>'doxylamine',
                                'commercialName'=>'Diclegis',
                                'manufacturer'=>'pfizer',
                                'quantity'=>'40',
                                'expirationDate'=>'2026-10-01',
                                'price'=>'8000',
                                'classifications_Id'=>'2',
                                'store_houses_Id'=>'1',
                            ]);
                            Drug::create([
                                'scientificName'=>'pyridoxine',
                                'commercialName'=>'Bonjesta',
                                'manufacturer'=>'AstraZeneca',
                                'quantity'=>'100',
                                'expirationDate'=>'2026-9-03',
                                'price'=>'10000',
                                'classifications_Id'=>'2',
                                'store_houses_Id'=>'1',
                            ]);
                            Drug::create([
                                'scientificName'=>'dronabinol',
                            'commercialName'=>'Marinol',
                            'manufacturer'=>'Wyeth',
                            'quantity'=>'80',
                            'expirationDate'=>'2026-9-09',
                            'price'=>'10000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'1',
                            ]);
                            Drug::create([
                                'scientificName'=>' lorazepam',
                                'commercialName'=>'Ativan',
                                'manufacturer'=>'Roche',
                                'quantity'=>'100',
                                'expirationDate'=>'2025-4-12',
                                'price'=>'5500',
                                'classifications_Id'=>'2',
                                'store_houses_Id'=>'1',
                            ]);
        

                            //ادوية التصنيف الثالث
       
                            Drug::create([
      
                                'scientificName'=>'Allerga',
       
                                'commercialName'=>'Fexofenadine',
          
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'100',
          
                                'expirationDate'=>'2026-12-02',
           
                                'price'=>'10000',
          
                                'classifications_Id'=>'3',
          
                                'store_houses_Id'=>'1',
           
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'Zyrtec',
          
                                'commercialName'=>'Cetirizine',
          
                                'manufacturer'=>'pfizer',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2027-1-01',
          
                                'price'=>'15000',
          
                                'classifications_Id'=>'3',
          
                                'store_houses_Id'=>'1',
          
                            ]);
            
                            Drug::create([
            
                                'scientificName'=>'clarinex',
            
                                'commercialName'=>'Desloratadine',
            
                                'manufacturer'=>'Novartis',
            
                                'quantity'=>'70',
            
                                'expirationDate'=>'2026-5-05',
            
                                'price'=>'5000',
            
                                'classifications_Id'=>'3',
            
                                'store_houses_Id'=>'1',
            
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'Xyzal',
          
                                'commercialName'=>'Levocetirizine',
          
                                'manufacturer'=>'ِAbbott',
          
                                'quantity'=>'50',
          
                                'expirationDate'=>'2026-10-02',
          
                                'price'=>'10000',
                                'classifications_Id'=>'3',
          
                                'store_houses_Id'=>'1',
          
                            ]);
        
                            Drug::create([
        
                                'scientificName'=>'Alavert',
        
                                'commercialName'=>'Loratadine',
        
                                'manufacturer'=>'Roche',
        
                                'quantity'=>'150',
        
                                'expirationDate'=>'2024-12-12',
        
                                'price'=>'6000',
        
                                'classifications_Id'=>'2',
        
                                'store_houses_Id'=>'1',
        
                            ]);
           
                            Drug::create([
           
                                'scientificName'=>'diphenhydramine',
           
                                'commercialName'=>'Benadryl',
           
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'80',
           
                                'expirationDate'=>'2027-2-02',
           
                                'price'=>'9000',
           
                                'classifications_Id'=>'3',
           
                                'store_houses_Id'=>'1',
           
                            ]);
              
                            Drug::create([
              
                                'scientificName'=>'Zyrtec',
              
                                'commercialName'=>'cetirizine',
              
                                'manufacturer'=>'pfizer',
              
                                'quantity'=>'60',
              
                                'expirationDate'=>'2026-10-01',
              
                                'price'=>'7000',
              
                                'classifications_Id'=>'3',
              
                                'store_houses_Id'=>'1',
              
                            ]);
 
                            Drug::create([
 
                                'scientificName'=>'peanut allergen powder',
 
                                'commercialName'=>'Palforzia ',
 
                                'manufacturer'=>'AstraZeneca',
 
                                'quantity'=>'100',
 
                                'expirationDate'=>'2026-9-03',
 
                                'price'=>'10000',
 
                                'classifications_Id'=>'3',
 
                                'store_houses_Id'=>'1',
 
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'allergen extract',
          
                                'commercialName'=>'Odactra',
          
                                'manufacturer'=>'Wyeth',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2026-9-09',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'3',
          
          
                                'store_houses_Id'=>'1',
          
                            ]);
             
          
                            Drug::create([
         
                                'scientificName'=>'timothy',
         
                                'commercialName'=>'Grastek',
         
                                'manufacturer'=>'Roche',
         
                                'quantity'=>'100',
         
                                'expirationDate'=>'2025-4-12',
         
                                'price'=>'5500',
         
                                'classifications_Id'=>'3',
         
                                'store_houses_Id'=>'1',
         
                            ]);
                             //ادوية التصنيف االرابع
                             Drug::create([
      
                                'scientificName'=>'doxorubicin',
       
                                'commercialName'=>'Adriamycin',
          
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'100',
          
                                'expirationDate'=>'2026-12-02',
           
                                'price'=>'10000',
          
                                'classifications_Id'=>'4',
          
                                'store_houses_Id'=>'1',
           
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'mitoxantrone',
          
                                'commercialName'=>'Novantrone',
          
                                'manufacturer'=>'pfizer',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2027-1-01',
          
                                'price'=>'15000',
          
                                'classifications_Id'=>'4',
          
                                'store_houses_Id'=>'1',
          
                            ]);
            
                            Drug::create([
            
                                'scientificName'=>'doxorubicin liposomal',
            
                                'commercialName'=>'Doxil',
            
                                'manufacturer'=>'Novartis',
            
                                'quantity'=>'70',
            
                                'expirationDate'=>'2026-5-05',
            
                                'price'=>'5000',
            
                                'classifications_Id'=>'4',
            
                                'store_houses_Id'=>'1',
            
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'valrubicin',
          
                                'commercialName'=>'Valstar',
          
                                'manufacturer'=>'ِAbbott',
          
                                'quantity'=>'50',
          
                                'expirationDate'=>'2026-10-02',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'4',
          
                                'store_houses_Id'=>'1',
          
                            ]);
        
                            Drug::create([
        
                                'scientificName'=>'pentostatin',
        
                                'commercialName'=>'Nipent',
        
                                'manufacturer'=>'Roche',
        
                                'quantity'=>'150',
        
                                'expirationDate'=>'2024-12-12',
        
                                'price'=>'6000',
        
                                'classifications_Id'=>'4',
        
                                'store_houses_Id'=>'1',
        
                            ]);
           
                            Drug::create([
           
                                'scientificName'=>'mitomycin',
           
                                'commercialName'=>'Mutamycin',
           
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'80',
           
                                'expirationDate'=>'2027-2-02',
           
                                'price'=>'9000',
           
                                'classifications_Id'=>'4',
           
                                'store_houses_Id'=>'1',
           
                            ]);
              
                            Drug::create([
              
                                'scientificName'=>'mitomycin',
              
                                'commercialName'=>'Jelmyto',
                                'manufacturer'=>'pfizer',
              
                                'quantity'=>'60',
              
                                'expirationDate'=>'2026-10-01',
              
                                'price'=>'7000',
              
                                'classifications_Id'=>'4',
              
                                'store_houses_Id'=>'1',
              
                            ]);
 
                            Drug::create([
 
                                'scientificName'=>'idarubicin',
 
                                'commercialName'=>'Idamycin PFS',
 
                                'manufacturer'=>'AstraZeneca',
 
                                'quantity'=>'100',
 
                                'expirationDate'=>'2026-9-03',
 
                                'price'=>'10000',
 
                                'classifications_Id'=>'4',
 
                                'store_houses_Id'=>'1',
 
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'epirubicin',
          
                                'commercialName'=>'Ellence',
          
                                'manufacturer'=>'Wyeth',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2026-9-09',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'4',
          
          
                                'store_houses_Id'=>'1',
          
                            ]);
             
          
                            Drug::create([
         
                                'scientificName'=>'daunorubicin liposomal',
         
                                'commercialName'=>'DaunoXome',
         
                                'manufacturer'=>'Roche',
         
                                'quantity'=>'100',
         
                                'expirationDate'=>'2025-4-12',
         
                                'price'=>'5500',
         
                                'classifications_Id'=>'4',
         
                                'store_houses_Id'=>'1',
         
                            ]);
                         //ادوية التصنيف الخامس
       
                         Drug::create([
      
                            'scientificName'=>'Fluoxetine',
   
                            'commercialName'=>'prozac',
      
                            'manufacturer'=>'Johson',
       
                            'quantity'=>'100',
      
                            'expirationDate'=>'2026-12-02',
       
                            'price'=>'10000',
      
                            'classifications_Id'=>'5',
      
                            'store_houses_Id'=>'1',
       
                        ]);
      
                        Drug::create([
      
                            'scientificName'=>'Imipramine',
      
                            'commercialName'=>'Tofranil',
      
                            'manufacturer'=>'pfizer',
      
                            'quantity'=>'80',
      
                            'expirationDate'=>'2027-1-01',
      
                            'price'=>'15000',
      
                            'classifications_Id'=>'5',
      
                            'store_houses_Id'=>'1',
      
                        ]);
        
                        Drug::create([
        
                            'scientificName'=>'Lofibramine',
        
                            'commercialName'=>'Jamaniel',
        
                            'manufacturer'=>'Novartis',
        
                            'quantity'=>'70',
        
                            'expirationDate'=>'2026-5-05',
        
                            'price'=>'5000',
        
                            'classifications_Id'=>'5',
        
                            'store_houses_Id'=>'1',
        
                        ]);
                        Drug::create([
      
                            'scientificName'=>'Mirtabine',
      
                            'commercialName'=>'Zespin',
      
                            'manufacturer'=>'ِAbbott',
      
                            'quantity'=>'50',
      
                            'expirationDate'=>'2026-10-02',
      
                            'price'=>'10000',
      
                            'classifications_Id'=>'5',
      
                            'store_houses_Id'=>'1',
      
                        ]);
    
          
            
                         //ادوية التصنيف السادس
       
                         Drug::create([
      
                            'scientificName'=>'ferrous sulfate',
   
                            'commercialName'=>'Feosol Original',
      
                            'manufacturer'=>'Johson',
       
                            'quantity'=>'100',
      
                            'expirationDate'=>'2026-12-02',
       
                            'price'=>'10000',
      
                            'classifications_Id'=>'6',
      
                            'store_houses_Id'=>'1',
       
                        ]);
      
                        Drug::create([
      
                            'scientificName'=>'iron dextran',
      
                            'commercialName'=>'Infed',
      
                            'manufacturer'=>'pfizer',
      
                            'quantity'=>'80',
      
                            'expirationDate'=>'2027-1-01',
      
                            'price'=>'15000',
      
                            'classifications_Id'=>'6',
      
                            'store_houses_Id'=>'1',
      
                        ]);
        
                        Drug::create([
        
                            'scientificName'=>'iron polysaccharide ',
        
                            'commercialName'=>'Ezfe',
        
                            'manufacturer'=>'Novartis',
        
                            'quantity'=>'70',
        
                            'expirationDate'=>'2026-5-05',
        
                            'price'=>'5000',
        
                            'classifications_Id'=>'6',
        
                            'store_houses_Id'=>'1',
        
                        ]);
      
                        Drug::create([
      
                            'scientificName'=>'fumarate',
      
                            'commercialName'=>'Hemocyte',
      
                            'manufacturer'=>'ِAbbott',
      
                            'quantity'=>'50',
      
                            'expirationDate'=>'2026-10-02',
      
                            'price'=>'10000',
      
                            'classifications_Id'=>'6',
      
                            'store_houses_Id'=>'1',
      
                        ]);
    
                        Drug::create([
    
                            'scientificName'=>'gluconate',
    
                            'commercialName'=>'Fergon',
    
                            'manufacturer'=>'Roche',
    
                            'quantity'=>'150',
    
                            'expirationDate'=>'2024-12-12',
    
                            'price'=>'6000',
    
                            'classifications_Id'=>'6',
    
                            'store_houses_Id'=>'1',
    
                        ]);
       
                        Drug::create([
       
                            'scientificName'=>'sulfate',
       
                            'commercialName'=>'Feratab',
       
                            'manufacturer'=>'Johson',
       
                            'quantity'=>'80',
       
                            'expirationDate'=>'2027-2-02',
       
                            'price'=>'9000',
       
                            'classifications_Id'=>'6',
       
                            'store_houses_Id'=>'1',
       
                        ]);
          //التصنيف السابع
          Drug::create([
          
            'scientificName'=>'l-methylfolate',

            'commercialName'=>'Deplin',

            'manufacturer'=>'pfizer',

            'quantity'=>'60',

            'expirationDate'=>'2026-10-01',

            'price'=>'7000',

            'classifications_Id'=>'7',

            'store_houses_Id'=>'1',

        ]);

        Drug::create([

            'scientificName'=>'niacin',

            'commercialName'=>'Niaspan',

            'manufacturer'=>'AstraZeneca',

            'quantity'=>'100',

            'expirationDate'=>'2026-9-03',

            'price'=>'10000',

            'classifications_Id'=>'7',

            'store_houses_Id'=>'1',

        ]);

        Drug::create([

            'scientificName'=>'cyanocobalamin',

            'commercialName'=>'Vitamin B12',

            'manufacturer'=>'Wyeth',

            'quantity'=>'80',

            'expirationDate'=>'2026-9-09',

            'price'=>'10000',

            'classifications_Id'=>'7',


            'store_houses_Id'=>'1',

        ]);


        Drug::create([

            'scientificName'=>'diosmiplex',

            'commercialName'=>'Vasculera',

            'manufacturer'=>'Roche',

            'quantity'=>'100',

            'expirationDate'=>'2025-4-12',

            'price'=>'5500',

            'classifications_Id'=>'7',

            'store_houses_Id'=>'1',

        ]);

        Drug::create([

            'scientificName'=>'cholecalciferol',

            'commercialName'=>'Vitamin D3',

            'manufacturer'=>'Roche',

            'quantity'=>'100',

            'expirationDate'=>'2025-4-12',

            'price'=>'5500',

            'classifications_Id'=>'7',

            'store_houses_Id'=>'1',

        ]);
        
                     //التصنيف الثامن

                        Drug::create([
          
                            'scientificName'=>'metformin',
          
                            'commercialName'=>'Janumet',
          
                            'manufacturer'=>'pfizer',
          
                            'quantity'=>'60',
          
                            'expirationDate'=>'2026-10-01',
          
                            'price'=>'7000',
          
                            'classifications_Id'=>'8',
          
                            'store_houses_Id'=>'1',
          
                        ]);

                        Drug::create([

                            'scientificName'=>'empagliflozin',

                            'commercialName'=>'Synjardy',

                            'manufacturer'=>'AstraZeneca',

                            'quantity'=>'100',

                            'expirationDate'=>'2026-9-03',

                            'price'=>'10000',

                            'classifications_Id'=>'8',

                            'store_houses_Id'=>'1',
                        ]);
      
                        Drug::create([
      
                            'scientificName'=>'empagliflozin',
      
                            'commercialName'=>'Glyxambi',
      
                            'manufacturer'=>'Wyeth',
      
                            'quantity'=>'80',
      
                            'expirationDate'=>'2026-9-09',
      
                            'price'=>'10000',
      
                            'classifications_Id'=>'8',
      
      
                            'store_houses_Id'=>'1',
      
                        ]);
         
      
                        Drug::create([
     
                            'scientificName'=>'dapagliflozin',
     
                            'commercialName'=>'Xigduo XR',
     
                            'manufacturer'=>'Roche',
     
                            'quantity'=>'100',
     
                            'expirationDate'=>'2025-4-12',
     
                            'price'=>'5500',
     
                            'classifications_Id'=>'8',
     
                            'store_houses_Id'=>'1',
     
                        ]);
        
                        Drug::create([
     
                            'scientificName'=>'metformin',
     
                            'commercialName'=>'Kombiglyze XR',
     
                            'manufacturer'=>'Roche',
     
                            'quantity'=>'100',
     
                            'expirationDate'=>'2025-4-12',
     
                            'price'=>'5500',
     
                            'classifications_Id'=>'8',
     
                            'store_houses_Id'=>'1',
     
                        ]);

                        
                         


//المستودع الثاني
                        
            //ادوية التصنيف الاول
            Drug::create([
                'scientificName'=>'dextromethorphan',
                'commercialName'=>'Babee Cof',
                'manufacturer'=>'Johson',
                'quantity'=>'50',
                'expirationDate'=>'2025-12-02',
                'price'=>'5000',
                'classifications_Id'=>'1',
                'store_houses_Id'=>'2',
                ]);
                Drug::create([
                    'scientificName'=>'benzonatate',
                    'commercialName'=>'Tessalon',
                    'manufacturer'=>'pfizer',
                    'quantity'=>'100',
                    'expirationDate'=>'2026-1-01',
                    'price'=>'8000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'2',
                ]);
                Drug::create([
                    'scientificName'=>'benzonatate',
                    'commercialName'=>'Zonatuss',
                    'manufacturer'=>'Novartis',
                    'quantity'=>'50',
                    'expirationDate'=>'2025-5-05',
                    'price'=>'5000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'2',
                ]);
                Drug::create([
                    'scientificName'=>'dextromethorphan',
                'commercialName'=>'Silphen DM',
                'manufacturer'=>'Merck',
                'quantity'=>'50',
                'expirationDate'=>'2026-10-02',
                'price'=>'10000',
                'classifications_Id'=>'1',
                'store_houses_Id'=>'2',
                ]);
                Drug::create([
                    'scientificName'=>'dextromethorphan',
                    'commercialName'=>'Hold',
                    'manufacturer'=>'Roche',
                    'quantity'=>'50',
                    'expirationDate'=>'2024-12-12',
                    'price'=>'6000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'2',
                ]);
                Drug::create([
                    'scientificName'=>'dextromethorphan',
                    'commercialName'=>'Creomulsion',
                    'manufacturer'=>'Johson',
                    'quantity'=>'80',
                    'expirationDate'=>'2027-2-02',
                    'price'=>'9000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'2',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                        'commercialName'=>'Delsym',
                        'manufacturer'=>'pfizer',
                        'quantity'=>'40',
                        'expirationDate'=>'2026-10-01',
                        'price'=>'8000',
                        'classifications_Id'=>'1',
                        'store_houses_Id'=>'2',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                        'commercialName'=>'Sucrets Cough',
                        'manufacturer'=>'Novartis',
                        'quantity'=>'50',
                        'expirationDate'=>'2026-9-03',
                        'price'=>'10000',
                        'classifications_Id'=>'1',
                        'store_houses_Id'=>'2',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                    'commercialName'=>'Creomulsion',
                    'manufacturer'=>'Merck',
                    'quantity'=>'60',
                    'expirationDate'=>'2026-9-09',
                    'price'=>'10000',
                    'classifications_Id'=>'1',
                    'store_houses_Id'=>'2',
                    ]);
                    Drug::create([
                        'scientificName'=>'dextromethorphan',
                        'commercialName'=>'Buckleys Mixture',
                        'manufacturer'=>'Roche',
                        'quantity'=>'50',
                        'expirationDate'=>'2025-4-12',
                        'price'=>'5500',
                        'classifications_Id'=>'1',
                        'store_houses_Id'=>'2',
                    ]);
                    
                    //ادوية التصنيف الثاني
                    Drug::create([
                        'scientificName'=>'amisulpride',
                        'commercialName'=>'Domperidone',
                        'manufacturer'=>'Johson',
                        'quantity'=>'50',
                        'expirationDate'=>'2025-12-02',
                        'price'=>'5000',
                        'classifications_Id'=>'2',
                        'store_houses_Id'=>'2',
                        ]);
                        Drug::create([
                            'scientificName'=>'benzonatate',
                            'commercialName'=>'Driminate',
                            'manufacturer'=>'pfizer',
                            'quantity'=>'100',
                            'expirationDate'=>'2026-1-01',
                            'price'=>'8000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'2',
                        ]);
                        Drug::create([
                            'scientificName'=>'palonosetron',
                            'commercialName'=>'Dramamine',
                            'manufacturer'=>'Novartis',
                            'quantity'=>'50',
                            'expirationDate'=>'2025-5-05',
                            'price'=>'5000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'2',
                        ]);
                        Drug::create([
                            'scientificName'=>'palonosetron',
                        'commercialName'=>'Dansetron',
                        'manufacturer'=>'ِAbbott',
                        'quantity'=>'50',
                        'expirationDate'=>'2026-10-02',
                        'price'=>'10000',
                        'classifications_Id'=>'2',
                        'store_houses_Id'=>'2',
                        ]);
                        Drug::create([
                            'scientificName'=>'dronabinol',
                            'commercialName'=>'Navidoxine',
                            'manufacturer'=>'Roche',
                            'quantity'=>'50',
                            'expirationDate'=>'2024-12-12',
                            'price'=>'6000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'2',
                        ]);
                        Drug::create([
                            'scientificName'=>' lorazepam',
                            'commercialName'=>'Foumidal',
                            'manufacturer'=>'Johson',
                            'quantity'=>'80',
                            'expirationDate'=>'2027-2-02',
                            'price'=>'9000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'2',
                            ]);
                            Drug::create([
                                'scientificName'=>'doxylamine',
                                'commercialName'=>'Diclegis',
                                'manufacturer'=>'pfizer',
                                'quantity'=>'40',
                                'expirationDate'=>'2026-10-01',
                                'price'=>'8000',
                                'classifications_Id'=>'2',
                                'store_houses_Id'=>'2',
                            ]);
                            Drug::create([
                                'scientificName'=>'pyridoxine',
                                'commercialName'=>'Bonjesta',
                                'manufacturer'=>'AstraZeneca',
                                'quantity'=>'100',
                                'expirationDate'=>'2026-9-03',
                                'price'=>'10000',
                                'classifications_Id'=>'2',
                                'store_houses_Id'=>'2',
                            ]);
                            Drug::create([
                                'scientificName'=>'dronabinol',
                            'commercialName'=>'Marinol',
                            'manufacturer'=>'Wyeth',
                            'quantity'=>'80',
                            'expirationDate'=>'2026-9-09',
                            'price'=>'10000',
                            'classifications_Id'=>'2',
                            'store_houses_Id'=>'2',
                            ]);
                            Drug::create([
                                'scientificName'=>' lorazepam',
                                'commercialName'=>'Ativan',
                                'manufacturer'=>'Roche',
                                'quantity'=>'100',
                                'expirationDate'=>'2025-4-12',
                                'price'=>'5500',
                                'classifications_Id'=>'2',
                                'store_houses_Id'=>'2',
                            ]);
                            //ادوية التصنيف الثالث
       
                            Drug::create([
      
                                'scientificName'=>'Allerga',
       
                                'commercialName'=>'Fexofenadine',
          
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'100',
          
                                'expirationDate'=>'2026-12-02',
           
                                'price'=>'10000',
          
                                'classifications_Id'=>'3',
          
                                'store_houses_Id'=>'2',
           
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'Zyrtec',
          
                                'commercialName'=>'Cetirizine',
          
                                'manufacturer'=>'pfizer',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2027-1-01',
          
                                'price'=>'15000',
          
                                'classifications_Id'=>'3',
          
                                'store_houses_Id'=>'2',
          
                            ]);
            
                            Drug::create([
            
                                'scientificName'=>'clarinex',
            
                                'commercialName'=>'Desloratadine',
            
                                'manufacturer'=>'Novartis',
            
                                'quantity'=>'70',
            
                                'expirationDate'=>'2026-5-05',
            
                                'price'=>'5000',
            
                                'classifications_Id'=>'3',
            
                                'store_houses_Id'=>'2',
            
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'Xyzal',
          
                                'commercialName'=>'Levocetirizine',
          
                                'manufacturer'=>'ِAbbott',
          
                                'quantity'=>'50',
          
                                'expirationDate'=>'2026-10-02',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'3',
          
                                'store_houses_Id'=>'2',
          
                            ]);
        
                            Drug::create([
        
                                'scientificName'=>'Alavert',
        
                                'commercialName'=>'Loratadine',
        
                                'manufacturer'=>'Roche',
        
                                'quantity'=>'150',
        
                                'expirationDate'=>'2024-12-12',
        
                                'price'=>'6000',
        
                                'classifications_Id'=>'2',
        
                                'store_houses_Id'=>'2',
        
                            ]);
           
                            Drug::create([
           
                                'scientificName'=>'diphenhydramine',
           
                                'commercialName'=>'Benadryl',
           
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'80',
           
                                'expirationDate'=>'2027-2-02',
           
                                'price'=>'9000',
           
                                'classifications_Id'=>'3',
           
                                'store_houses_Id'=>'2',
           
                            ]);
              
                            Drug::create([
              
                                'scientificName'=>'Zyrtec',
                                'commercialName'=>'cetirizine',
              
                                'manufacturer'=>'pfizer',
              
                                'quantity'=>'60',
              
                                'expirationDate'=>'2026-10-01',
              
                                'price'=>'7000',
              
                                'classifications_Id'=>'3',
              
                                'store_houses_Id'=>'2',
              
                            ]);
 
                            Drug::create([
 
                                'scientificName'=>'peanut allergen powder',
 
                                'commercialName'=>'Palforzia ',
 
                                'manufacturer'=>'AstraZeneca',
 
                                'quantity'=>'100',
 
                                'expirationDate'=>'2026-9-03',
 
                                'price'=>'10000',
 
                                'classifications_Id'=>'3',
 
                                'store_houses_Id'=>'2',
 
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'allergen extract',
          
                                'commercialName'=>'Odactra',
          
                                'manufacturer'=>'Wyeth',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2026-9-09',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'3',
          
          
                                'store_houses_Id'=>'2',
          
                            ]);
             
          
                            Drug::create([
         
                                'scientificName'=>'timothy',
         
                                'commercialName'=>'Grastek',
         
                                'manufacturer'=>'Roche',
         
                                'quantity'=>'100',
         
                                'expirationDate'=>'2025-4-12',
         
                                'price'=>'5500',
         
                                'classifications_Id'=>'3',
         
                                'store_houses_Id'=>'2',
         
                            ]);
                            //ادوية التصنيف االرابع
       
                            Drug::create([
      
                                'scientificName'=>'doxorubicin',
       
                                'commercialName'=>'Adriamycin',
          
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'100',
          
                                'expirationDate'=>'2026-12-02',
           
                                'price'=>'10000',
          
                                'classifications_Id'=>'4',
          
                                'store_houses_Id'=>'2',
           
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'mitoxantrone',
          
                                'commercialName'=>'Novantrone',
          
                                'manufacturer'=>'pfizer',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2027-1-01',
          
                                'price'=>'15000',
          
                                'classifications_Id'=>'4',
          
                                'store_houses_Id'=>'2',
          
                            ]);
            
                            Drug::create([
            
                                'scientificName'=>'doxorubicin liposomal',
            
                                'commercialName'=>'Doxil',
            
                                'manufacturer'=>'Novartis',
            
                                'quantity'=>'70',
            
                                'expirationDate'=>'2026-5-05',
            
                                'price'=>'5000',
            
                                'classifications_Id'=>'4',
            
                                'store_houses_Id'=>'2',
            
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'valrubicin',
          
                                'commercialName'=>'Valstar',
          
                                'manufacturer'=>'ِAbbott',
          
                                'quantity'=>'50',
          
                                'expirationDate'=>'2026-10-02',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'4',
          
                                'store_houses_Id'=>'2',
          
                            ]);
        
                            Drug::create([
        
                                'scientificName'=>'pentostatin',
        
                                'commercialName'=>'Nipent',
        
                                'manufacturer'=>'Roche',
        
                                'quantity'=>'150',
        
                                'expirationDate'=>'2024-12-12',
        
                                'price'=>'6000',
        
                                'classifications_Id'=>'4',
        
                                'store_houses_Id'=>'2',
        
                            ]);
           
                            Drug::create([
           
                                'scientificName'=>'mitomycin',
           
                                'commercialName'=>'Mutamycin',
           
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'80',
                                'expirationDate'=>'2027-2-02',
               
                                    'price'=>'9000',
               
                                    'classifications_Id'=>'4',
               
                                    'store_houses_Id'=>'2',
               
                                ]);
                  
                                Drug::create([
                  
                                    'scientificName'=>'mitomycin',
                  
                                    'commercialName'=>'Jelmyto',
                  
                                    'manufacturer'=>'pfizer',
                  
                                    'quantity'=>'60',
                  
                                    'expirationDate'=>'2026-10-01',
                  
                                    'price'=>'7000',
                  
                                    'classifications_Id'=>'4',
                  
                                    'store_houses_Id'=>'2',
                  
                                ]);
     
                                Drug::create([
     
                                    'scientificName'=>'idarubicin',
     
                                    'commercialName'=>'Idamycin PFS',
     
                                    'manufacturer'=>'AstraZeneca',
     
                                    'quantity'=>'100',
     
                                    'expirationDate'=>'2026-9-03',
     
                                    'price'=>'10000',
     
                                    'classifications_Id'=>'4',
     
                                    'store_houses_Id'=>'2',
     
                                ]);
              
                                Drug::create([
              
                                    'scientificName'=>'epirubicin',
              
                                    'commercialName'=>'Ellence',
              
                                    'manufacturer'=>'Wyeth',
              
                                    'quantity'=>'80',
              
                                    'expirationDate'=>'2026-9-09',
              
                                    'price'=>'10000',
              
                                    'classifications_Id'=>'4',
              
              
                                    'store_houses_Id'=>'2',
              
                                ]);
                 
              
                                Drug::create([
             
                                    'scientificName'=>'daunorubicin liposomal',
             
                                    'commercialName'=>'DaunoXome',
             
                                    'manufacturer'=>'Roche',
             
                                    'quantity'=>'100',
             
                                    'expirationDate'=>'2025-4-12',
             
                                    'price'=>'5500',
             
                                    'classifications_Id'=>'4',
             
                                    'store_houses_Id'=>'2',
             
                                ]);
                             //ادوية التصنيف الخامس
           
                             Drug::create([
          
                                'scientificName'=>'Fluoxetine',
       
                                'commercialName'=>'prozac',
          
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'100',
          
                                'expirationDate'=>'2026-12-02',
           
                                'price'=>'10000',
          
                                'classifications_Id'=>'5',
          
                                'store_houses_Id'=>'2',
           
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'Imipramine',
                                'commercialName'=>'Tofranil',
          
                                'manufacturer'=>'pfizer',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2027-1-01',
          
                                'price'=>'15000',
          
                                'classifications_Id'=>'5',
          
                                'store_houses_Id'=>'2',
          
                            ]);
            
                            Drug::create([
            
                                'scientificName'=>'Lofibramine',
            
                                'commercialName'=>'Jamaniel',
            
                                'manufacturer'=>'Novartis',
            
                                'quantity'=>'70',
            
                                'expirationDate'=>'2026-5-05',
            
                                'price'=>'5000',
            
                                'classifications_Id'=>'5',
            
                                'store_houses_Id'=>'2',
            
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'Mirtabine',
          
                                'commercialName'=>'Zespin',
          
                                'manufacturer'=>'ِAbbott',
          
                                'quantity'=>'50',
          
                                'expirationDate'=>'2026-10-02',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'5',
          
                                'store_houses_Id'=>'2',
          
                            ]);
        
              
                
                             //ادوية التصنيف السادس
           
                             Drug::create([
          
                                'scientificName'=>'ferrous sulfate',
       
                                'commercialName'=>'Feosol Original',
          
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'100',
          
                                'expirationDate'=>'2026-12-02',
           
                                'price'=>'10000',
          
                                'classifications_Id'=>'6',
          
                                'store_houses_Id'=>'2',
           
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'iron dextran',
          
                                'commercialName'=>'Infed',
          
                                'manufacturer'=>'pfizer',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2027-1-01',
          
                                'price'=>'15000',
          
                                'classifications_Id'=>'6',
          
                                'store_houses_Id'=>'2',
          
                            ]);
            
                            Drug::create([
            
                                'scientificName'=>'iron polysaccharide ',
            
                                'commercialName'=>'Ezfe',
            
                                'manufacturer'=>'Novartis',
            
                                'quantity'=>'70',
            
                                'expirationDate'=>'2026-5-05',
            
                                'price'=>'5000',
            
                                'classifications_Id'=>'6',
            
                                'store_houses_Id'=>'2',
            
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'fumarate',
          
                                'commercialName'=>'Hemocyte',
                                'manufacturer'=>'ِAbbott',
          
                                'quantity'=>'50',
          
                                'expirationDate'=>'2026-10-02',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'6',
          
                                'store_houses_Id'=>'2',
          
                            ]);
        
                            Drug::create([
        
                                'scientificName'=>'gluconate',
        
                                'commercialName'=>'Fergon',
        
                                'manufacturer'=>'Roche',
        
                                'quantity'=>'150',
        
                                'expirationDate'=>'2024-12-12',
        
                                'price'=>'6000',
        
                                'classifications_Id'=>'6',
        
                                'store_houses_Id'=>'2',
        
                            ]);
           
                            Drug::create([
           
                                'scientificName'=>'sulfate',
           
                                'commercialName'=>'Feratab',
           
                                'manufacturer'=>'Johson',
           
                                'quantity'=>'80',
           
                                'expirationDate'=>'2027-2-02',
           
                                'price'=>'9000',
           
                                'classifications_Id'=>'6',
           
                                'store_houses_Id'=>'2',
           
                            ]);
              //التصنيف السابع
    
              Drug::create([
              
                'scientificName'=>'l-methylfolate',
    
                'commercialName'=>'Deplin',
    
                'manufacturer'=>'pfizer',
    
                'quantity'=>'60',
    
                'expirationDate'=>'2026-10-01',
    
                'price'=>'7000',
    
                'classifications_Id'=>'7',
    
                'store_houses_Id'=>'2',
    
            ]);
    
            Drug::create([
    
                'scientificName'=>'niacin',
    
                'commercialName'=>'Niaspan',
    
                'manufacturer'=>'AstraZeneca',
    
                'quantity'=>'100',
    
                'expirationDate'=>'2026-9-03',
    
                'price'=>'10000',
    
                'classifications_Id'=>'7',
    
                'store_houses_Id'=>'2',
    
            ]);
    
            Drug::create([
    
                'scientificName'=>'cyanocobalamin',
    
                'commercialName'=>'Vitamin B12',
    
                'manufacturer'=>'Wyeth',
    
                'quantity'=>'80',
    
                'expirationDate'=>'2026-9-09',
    
                'price'=>'10000',
    
                'classifications_Id'=>'7',
    
    
                'store_houses_Id'=>'2',
    
            ]);
    
    
            Drug::create([
    
                'scientificName'=>'diosmiplex',
    
                'commercialName'=>'Vasculera',
    
                'manufacturer'=>'Roche',
    
                'quantity'=>'100',
    
                'expirationDate'=>'2025-4-12',
    
                'price'=>'5500',
    
                'classifications_Id'=>'7',
    
                'store_houses_Id'=>'2',
    
            ]);
    
            Drug::create([
    
                'scientificName'=>'cholecalciferol',
    
                'commercialName'=>'Vitamin D3',
    
                'manufacturer'=>'Roche',
    
                'quantity'=>'100',
    
                'expirationDate'=>'2025-4-12',
    
                'price'=>'5500',
    
                'classifications_Id'=>'7',
    
                'store_houses_Id'=>'2',
    
            ]);
            
                         //التصنيف الثامن
    
                            Drug::create([
              
                                'scientificName'=>'metformin',
                                'commercialName'=>'Janumet',
              
                                'manufacturer'=>'pfizer',
              
                                'quantity'=>'60',
              
                                'expirationDate'=>'2026-10-01',
              
                                'price'=>'7000',
              
                                'classifications_Id'=>'8',
              
                                'store_houses_Id'=>'2',
              
                            ]);
    
                            Drug::create([
    
                                'scientificName'=>'empagliflozin',
    
                                'commercialName'=>'Synjardy',
    
                                'manufacturer'=>'AstraZeneca',
    
                                'quantity'=>'100',
    
                                'expirationDate'=>'2026-9-03',
    
                                'price'=>'10000',
    
                                'classifications_Id'=>'8',
    
                                'store_houses_Id'=>'2',
    
                            ]);
          
                            Drug::create([
          
                                'scientificName'=>'empagliflozin',
          
                                'commercialName'=>'Glyxambi',
          
                                'manufacturer'=>'Wyeth',
          
                                'quantity'=>'80',
          
                                'expirationDate'=>'2026-9-09',
          
                                'price'=>'10000',
          
                                'classifications_Id'=>'8',
          
          
                                'store_houses_Id'=>'2',
          
                            ]);
             
          
                            Drug::create([
         
                                'scientificName'=>'dapagliflozin',
         
                                'commercialName'=>'Xigduo XR',
         
                                'manufacturer'=>'Roche',
         
                                'quantity'=>'100',
         
                                'expirationDate'=>'2025-4-12',
         
                                'price'=>'5500',
         
                                'classifications_Id'=>'8',
         
                                'store_houses_Id'=>'2',
         
                            ]);
            
                            Drug::create([
         
                                'scientificName'=>'metformin',
         
                                'commercialName'=>'Kombiglyze XR',
         
                                'manufacturer'=>'Roche',
         
                                'quantity'=>'100',
         
                                'expirationDate'=>'2025-4-12',
         
                                'price'=>'5500',
         
                                'classifications_Id'=>'8',
         
                                'store_houses_Id'=>'2',
         
                            ]);
                
       
                         
            }
    }
}