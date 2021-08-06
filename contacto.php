<?php
include("header.php");
?>
<div class="container">
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last py-3">
            <img class="img-fluid" src="./img/Img_proc/Panaderia MAYRA.jpg" alt="">
        </div>
        <div class="col-md-7 col-lg-8 py-5">
            <h4 class="mb-3">CONTACTO</h4>
            <form action="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control border-dark" id="firstName" placeholder="" value="" required="">
                    </div>
        
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control border-dark" id="lastName" placeholder="" value="" required="">
                    </div>
        
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control border-dark" id="email" placeholder="you@example.com">
                    </div>
        
                    <div class="col-12">
                        <label for="text" class="form-label">Comentarios</label>
                        <textarea class="form-control border-dark" maxlength="500" minlength="50" required placeholder="Comment" name="" id="" cols="30" rows="7"></textarea>
                    </div>
                    <button class="btn btn-dark" type="button">Enviar</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php
include("footer.php");
?>