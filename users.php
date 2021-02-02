
<!DOCTYPE html>
<html>
<body>
<label>User Details</label>
<table>

<p>Sort Table Rows by Clicking on the Table Headers - Ascending and Descending (jQuery)</p>
<div class="container">
    
    <div class="table">
        <div class="table-header">
            <div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Wins</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Draws</a></div>
            <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Losses</a></div>
            <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Total</a></div>
        </div>
            
    


<?php 
$data = get_users();
foreach($data as $item) {?>
    <div class="table-content">
    <div class="table-row">
                <div class="table-data">Harry</div>
                <div class="table-data">0</div>
                <div class="table-data">2</div>
                <div class="table-data">2</div>
                <div class="table-data">2</div>
            </div>
    </div>
</div>
</div>





<?php  } ?>

</table>
</body>
</html>

