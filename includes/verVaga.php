 
<div class="bg-dark text-light">
<h2 class="mt-3"> <?=TITLE?> </h2>
<section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button> 
        </a>
        </section>  

    <form method="post">
        <h2>Cargo</h2> 
        <div class="form-group">           
            <input type="text" class="form-control" name="descricao" value="<?=$obvagason->descricao?>" readonly>  
        <h2>Empresa</h2> 
            <input type="text" class="form-control" name="empresa" value="<?=$obvagason->empresa?>"  readonly>
        </div>
    </form>
</div>