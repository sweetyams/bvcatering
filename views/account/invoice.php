<?php require 'views/includes/header-min.php'; ?>

<div class="row">

	<div class="small-12 medium-11 large-10 small-centered columns">

  	<a class="button grey large" href="/account/invoices">Back To Invoices</a>

  	<div class="panel white contentpanel invoice">

			<div class="row">
        <div class="columns small-12 medium-6 textleft">
          <div class="logo dark"></div>
          <p><div class="status approved">Paid</div></p>
        </div>
        <div class="columns small-12 medium-6 textright">
            <h4>Invoice <b>T20004324</b></h4>
            <p>Le Bon Vivant <br/>2705 Notre Dame West <br/>Montreal, QC H4C 2G9 <br/>Quebec, Canada <br/>
            514 316 4585</p>
        </div> 
      </div>      
      <hr>
			<table class="responsive invoice">

				<thead>
					<tr>
						<th>Item</th>
						<th>Options</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
			<!-- 						<tfoot>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</tfoot> -->
				<tbody>
					<tr class="item">
						<td>SANDWICH TUNA MELT</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
					<tr class="option">
						<td>SANDWICH TUNA MELT</td>
						<td>GLUTEN FREE</td>
						<td>$1.00</td>
						<td>3</td>
						<td>$3.00</td>
					</tr>
					<tr class="option last">
						<td>SANDWICH TUNA MELT</td>
						<td>DAIRY FREE</td>
						<td>$1.00</td>
						<td>5</td>
						<td>$5.00</td>
					</tr>
					<tr class="item">
						<td>FIGUES & CHEDDAR</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
					<tr class="item">
						<td>QUINOA SALAD(SMALL)</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
					<tr class="item">
						<td>FIGUES & CHEDDAR</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
					<tr class="item">
						<td>QUINOA SALAD(SMALL)</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
					<tr class="item">
						<td>FIGUES & CHEDDAR</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
					<tr class="item">
						<td>QUINOA SALAD(SMALL)</td>
						<td></td>
						<td>$9.25</td>
						<td>13</td>
						<td>$120.25</td>
					</tr>
				</tbody>					
			</table>
			<div class="textright">
				<div class="total">
					<p>Subtotal<span>$360.75</span></p>
					<p>Taxes<span>$54.02</span></p>
					<div class="price"><span>$</span>414.79</div>
				</div>
			</div>
		
		</div> <!-- end .contentpanel -->
	</div>
</div>

<?php require 'views/includes/footer-min.php'; ?>