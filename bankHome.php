<body>
   <center>  <div class="form">
        <h2> ABCDEF Bank pvt ltd</h2>
        <form action="" name="myform" method="post">
            <table > 
                 <tr>
                    <td class="p">Installment Amount</td><td><input type="number" name="DepAmount" autofocus  ></td></tr> 
                 <tr>
                     <td class="p"> interest Rate</td> <td><input type="number" name="InRate"   class="bx" ></td></tr> 
                 <tr>
                    <td class="p">  Number of Years</td><td><input type="number" name="years"  ></td>
                  </tr>
                  <tr>
                    <td class="p">  <td><input type="submit" name="btn1" value="Find" id="bt" ></td>
                  </tr>
             
            <tr><td align="center" colspan="2"><div id="print"></div></td></tr>
        </table>
    </form>
    </div></center>
    <?php
     if(isset($_POST['btn1']))
     {  
     
        if($_POST["DepAmount"]=="" )
        echo "<center><p>installment amount field can't be empty</p></center>";
        else if($_POST["InRate"]=="")
        echo " <center><p>interest rate  fieldcan't be empty</p></center>";
        else if( $_POST["years"]=="")
        echo "<center><p>Year field can't be empty</p></center>";
        else {    
                $amount=floatval($_POST["DepAmount"]);
                $interst=floatval($_POST["InRate"]);
                $yr=intval($_POST["years"]);
                $res="<br><br><table class=tblAns align=center border=1><tr class=tblTh ><th >"."YEAR"."</th><th >"."AMOUNT"."</th><th>"."INTEREST"."</th><th>"."TOTAL_AMOUNT"."</th></tr>";
                
                if($amount<0) 
                   echo "<center><p>Please enter valid installment amount!</p></center>";
                else if($interst<0) 
                    echo "<center><p>Please enter valid interest Rate!</p></center>";
                else if( $yr<0) 
                   echo "<center><p>Please enter valid Year!!</p></center>";
                else
                {  
                        for($x=1; $x<=$yr; $x++)
                        {  
                        
                            $inrstAmount=($amount*($interst/100));
                            $totAmount=$amount+$inrstAmount;  
                            $res.= "<tr class=rowt><td> $x </td> <td>".number_format($amount,2)."</td> <td>".number_format($inrstAmount,2)."</td> <td>".number_format($totAmount,2)."</td></tr>"; 
                            $amount=$amount+$inrstAmount;
                    
                        } 
                        echo "$res</Table>";
                        echo "<br><br><center><p id=r>THANK YOU...</p></center>";
                        
                }
            }
        }
    ?>

<style> 
    .form
    {
        margin-left: 35%;
        margin-right: 30%;
        padding: 20px;
        background-color: #009DD1; 
      
    }
    input[type=number]
    {
        padding: 10px;
        display: inline;
        margin-left: 30%; 
    }
    input [type=submit]:hover
    {
        background-color: green;
    }
    
    .p{
        font-weight: bold;
        font-size: 20px;
        display: inline;
        text-align: left; 
        padding: 5px;
        color: rgb(1, 0, 7); 
    }
    h2{
        color: green;
        background-color: white;
        display: inline;
        font-size: 25px;
    }
    .tblAns 
    {
        background-color: #97E7F5;
        color: #020000;
        width: 34%;
        margin-left:35.5%;
        text-align:center;
        font-size:20px;
    }
    .tblTh th
    {
        background-color: white);
    }
    .tblAns tr:nth-child(odd)
    {
        background-color:#9ff4bb;
    }
    .tblAns tr:nth-child(even)
    {
        background-color:light blue;
    }
    #bt
    {
     
    }
    p
    {
        color:red;
        font-family:monospace;
        font-weight:bold;
        font-size:20px;
    }
    #r{
        color:blue;
    }
    #bt
     {
            background-color: #0ABAB5;
            border: none;
            color: white;
            padding: 12px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

            }
</style>
</body>
