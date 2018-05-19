<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test kalkulacije PDV</title>
        
        <style>
            body{
                text-align: center;
                margin: 35px;
            }
            
            table{
               border-color: blue;
               border-radius: 4px;
               border-style: dashed;
               background: aliceblue;
               align-content: center;
               padding: 12px;
               margin: 20px;
               
               
            }
            
            .tabrow{
                padding: 11px;
                margin: 10px;
            }
            
        </style>
        
    </head>
    <body>
        <?php
        
            include './Pdv.php';
            include './Artikal.php';
            
            //Primer niza objekata Artikal.
            $artikli=array(new Artikal("Solje za kafu","Set solja 6/1" , 2450.50),
                            new Artikal("Mikser za kolace","Mikser Wr1300" , 1240.00),
                            new Artikal("Hemijske olovke","Pakovanje 20/1" , 875.00),
                            new Artikal("Drzac nozeva","Drzac velikih i malih nozeva" , 1890.00));
             
            echo "<table border=\"1\" width=\"2\" cellspacing=\"3\" cellpadding=\"3\">
            <thead>
                <tr class=\"tabrow\">
                    <th>Naziv artikla</th>
                    <th>opis artikla</th>
                    <th>cena</th>
                    <th>cena sa PDV-om</th>
                    <th>Iznos od Pdv</th>
                </tr>
            </thead>
            <tbody>";
                 
            //Petlja u kojoj se koristi PDV 
            foreach ($artikli as $key => $value) {
               $racpdv=new Pdv($value->cena_artikla,22.00);

                echo "<tr class=\"tabrow\">
                         <td>$value->naziv_artikla</td>
                         <td>$value->opis_artikla</td>
                         <td>" . number_format($value->getCena_artikla(),2) . "</td>
                         <td>" . number_format($racpdv->getUkupnoSaPDV(),2) . "</td>
                         <td>" . number_format($racpdv->getIznosPDV(),2) . "</td>    
                     </tr>";
             }

                echo "</tbody>
                       </table>";
                          
              
        ?>
              
    </body>
</html>
