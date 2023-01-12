<div class="row mt-5">
    <div class="col-md-12 text-center">
    <h4 class="text-danger">Baca Artikel Kami</h4>
    <p>Baca berita terbaru dari kami.</p>
    
    </div>
    <?php
        for($i=1;$i<=3;$i++):
    ?>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <img class="w-100" style="object-fit: cover; object-position: center; height: 300px;" src="/asset/img/dana.jpg">
            </div>
            <div class="card-body">
                <h5 class="card-text">
                    CC INVASI KOMINFO
                </h5>
                <p class="text-secondary">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quos explicabo eveniet at asperiores quaerat sit nulla nemo repudiandae voluptate?
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <?php
        endfor
    ?>
</div>