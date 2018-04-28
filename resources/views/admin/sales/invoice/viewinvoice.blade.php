	<h3>Sales Invoice</h3>
<h3><?php echo "Customer Name: " .$customer_name ?></h3>
  <table style="border:solid 1px;width:100%;">
   <thead>
      <tr>
        <th>Line_ID</th>
        <th>Quantity</th>
        <th>Product ID</th>
      </tr>
    </thead>
    <tbody>

    

      @foreach($sales_invoice as $s_i)
      <tr>
        <td>{{$s_i->id}}</td>
        <td></td>>{{$s_i->qty}}</td>
        <td>{{$s_i->prod_id}}</td>
      </tr>

        @endforeach

    
      
   </tbody>
</table>
