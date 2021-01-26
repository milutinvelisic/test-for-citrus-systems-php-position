<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Product strana</h1>
        </div>
    </div>

    <div class="row">
        <?php
        foreach ($data['products'] as $product):
        ?>
        <div class="col-md-4 mt-5 mb-5">
            <div class="card">
                <img class="card-img-top" src="public/img/<?= $product->img ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
    <div class="row">
        <div class="col-md-12 mt-5">
            <h2>Comment section</h2>
        </div>
        <div class="col-md-12 mt-5 mb-5">
            <?php
            foreach ($data['comments'] as $comment):
            ?>
            <div class="col-7">
                <div class="card card-white post">
                    <div class="post-heading">
                        <div class="float-left image">

                        </div>
                        <div class="float-left meta">
                            <div class="title h4 mb-3">
                               <b><?= $comment->title ?></b>

                            </div>
                            <div class="title h5">
                               <b><?= $comment->email ?></b> made a post.
                            </div>
                        </div>
                    </div>
                    <div class="post-description">
                        <p><?= $comment->text ?></p>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-5">
            <h2>Enter Comment</h2>
        </div>
        <div class="col-md-5 mb-5">
            <?php

            if(isset($data["errors"])) {
                echo "<ul>";
                foreach($data["errors"] as $e) {
                    echo "<li>". $e ."</li>";
                }

                echo "</ul>";
            }

            ?>
            <form action="index.php?page=insertComment" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Comment title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter comment title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter comment</label>
                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
        </div>
    </div>
</div>