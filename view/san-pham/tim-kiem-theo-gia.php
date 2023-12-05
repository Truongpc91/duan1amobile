<br>
<div class="container" id="control_panel_1">
    <form action="index.php?act=sanpham" method ="post" enctype="multipart/form-data" id="form">
    <div class="card-header bg-primary text-white text-uppercase" role="tab" id="headingOne">
        <h6 class="mb-0">
            <a class="text-white d-block" data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne"><i class="fa-solid fa-sack-dollar"></i> Lọc theo giá 
            </a>
        </h6>
    </div><br>
    <div class="row">
            <div class="col">
              <input id="slide" type="range" min="0" max="40000000" step="100000" value="10" name="slide" class="form-range">
              <a id="sliderAmount"></a><a> đ</a>
            </div>
    </div>
    <button class="btn bg-primary " type="submit" name="serach"><i class="fa fa-search text-white" ></i></button>
  </form>
</div>
    <!--- SCRIPTS --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
    var slide = document.getElementById('slide'),
    sliderDiv = document.getElementById("sliderAmount");

    slide.onchange = function() {
        sliderDiv.innerHTML = this.value;
        $.ajax({
                url: '/index.php?act=sanpham',
                data: $('form').serialize(),
                type: 'POST',
                success: function(response){
                    console.log(response);
                },
                error: function(error){
                    console.log(error);
                }
            });
    }
</script>
