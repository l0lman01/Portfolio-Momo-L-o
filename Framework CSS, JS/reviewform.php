
  <h4>GIVE US YOUR THOUGHTS</h4>
    <div class="contc">
      <div class="row">
      <div class="col s6 offset-s3">
        <div class="row">
          <div class="input-field col s6">
            <input id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>
          <div class="input-field col s6">
            <select id="stars">
              <option value="" disabled selected>Rate the Project</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <label>Stars</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="review" class="materialize-textarea"></textarea>
            <label for="text">Review</label>
          </div>
        </div>
        </div>
      <div class="input-field col s12">
        <div class="container but">
          <p class="btn<?php echo $btnclr ?>" onclick="sendReview('<?php echo $page ?>')">
            Submit
             <i class="material-icons right">send</i>
          </p>
        </div>
      </div>
      </div>
    </div>
<br/><br/>
