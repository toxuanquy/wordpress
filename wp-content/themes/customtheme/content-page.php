
    <div class="headea-page">
        <h1 class="mt-4"><?php the_title() ?></h1>
        <p>Posted on <?php echo get_the_date() ?></p>
    </div>
 <?php the_content() ?>   
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="name" class="h4">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
        </div>
        <div class="form-group col-sm-6">
            <label for="email" class="h4">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="h4 ">Message</label>
        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
    </div>
    <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
    <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
