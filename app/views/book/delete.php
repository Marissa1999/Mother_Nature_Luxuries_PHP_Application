<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Delete Book</title>
  </head>
  <body>
     <div class='container'>
       <h1>Delete this Book</h1>
        <form action='' method='post'>
          <div class='form-group'>
              <label>Book Name: <input type='text' name='product_name' value='<?=$data->book_name ?>' disabled class='form-control' /></label>
              <label>Book Picture: <img src='/book_images/<?=$data->book_picture?>' style='max-width:100px;'/></label>
              <label>Book Description: <input type='text' name='product_details' value='<?=$data->book_description ?>' disabled class='form-control' /></label>
              <label>Book Price: <input type='text' name='product_price' value='<?=$data->book_price ?>' disabled class='form-control' /></label>
              <label>Book Quantity: <input type='text' name='product_quantity' value='<?=$data->book_quantity ?>' disabled class='form-control' /></label>
           </div>
             <input type='submit' name='action' value='Delete' class='btn btn-danger' />
        <a href='/home/index' class='btn btn-secondary'>Cancel</a> 
        </form>    
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
