<!doctype html>
<head>
    <title>

    </title>
</head>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="was-validated">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="validationServer01" class="form-label">First name</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationServer02" class="form-label">Last name</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationServerUsername" class="form-label">Username</label>
                            <div class="input-group">
                              <span class="input-group-text" id="inputGroupPrepend3">@</span>
                              <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
                              <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                            </div>
                          </div>
    
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="validationServer03" class="form-label">City</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-md-3">
                            <label for="validationServer04" class="form-label">State</label>
                            <select class="form-select is-invalid" id="validationServer04" required>
                              <option selected disabled value="">Choose...</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid state.
                            </div>
                          </div>
                          <div class="col-md-3">
                            <label for="validationServer05" class="form-label">Zip</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" required>
                            <div class="invalid-feedback">
                              Please provide a valid zip.
                            </div>
                          </div>
    
                    </div>
                      
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                          <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                          </label>
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                    <div class="mb-3">
                      <label for="validationTextarea" class="form-label">Textarea</label>
                      <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                      <div class="invalid-feedback">
                        Please enter a message in the textarea.
                      </div>
                    </div>
                  
                    <div class="form-check mb-3">
                      <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                      <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                      <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>
                  
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                      <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                    </div>
                    <div class="form-check mb-3">
                      <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                      <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                      <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                  
                    <div class="mb-3">
                      <select class="form-select" required aria-label="select example">
                        <option value="" selected>Select the product</option>
                        <option value="1">Wire</option>
                        <option value="2">Nail</option>
                        <option value="3">Any products</option>
                      </select>
                      <div class="invalid-feedback">Example invalid select feedback</div>
                    </div>
                  
                    <div class="form-file mb-3">
                      <input type="file" class="form-file-input" id="validationFormFile" required>
                      <label class="form-file-label" for="validationFormFile">
                        <span class="form-file-text">Choose file...</span>
                        <span class="form-file-button">Browse</span>
                      </label>
                      <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                  
                    <div class="mb-3">
                      <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
</body>
</html>