@extends('layouts.main')
@section('content')
<section class="add_post">
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mr-auto">
                <div class="image">
                  <label class="upload" >
                    <input  type="file" value="+">
                    +
                  </label>
                 
                </div>
            </div>
    
            <div class="col-md-6">
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  
                  <div class="col-md-12 form-group">
                    <label for="name" class="col-form-label">Title</label>
                    <input type="text" value="Halyk sergeki" class="form-control" name="name" id="name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email" class="col-form-label">Category</label>
                    <input list="categories" name="category" id="category" class="form-control">
                      <datalist id="categories">
                        <option value="People's right">
                        <option value="Charity">
                        <option value="Carruption">
                        <option value="Repair work">
                        <option value="Price changes">
                        <option value="Other"> 
                      </datalist>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email" class="col-form-label">Location</label>
                    <input list="categories" name="category" id="category" class="form-control">
                    <datalist id="categories">
                      <option value="Nur-sultan">
                      <option value="Almaty">
                      <option value="Karaganda">
                      <option value="Pavlodar">
                      <option value="Semey">
                      <option value="Kostanay">
                      <option value="Taldykorgan">
                      <option value="Kyzylorda">
                      <option value="Aktobe">
                      <option value="Aktau">
                      <option value="Oral">
                      <option value="Atyrau">
                      <option value="Mangystau">
                      <option value="Petropavlovsk">
                    </datalist>
                  </div>
                </div>
              </form>
    
              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                <div class="succes_message alert alert-success ">Your message was sent, thank you!</div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message" class="col-form-label">Message</label>
              <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <button type="submit"  class="btn btn-primary rounded-0 py-2 px-4 " onlick="function_submit">Send</button>
              
            </div>
          </div>
    </div>
</section>
<script>
  function function_submit(){
      alert("Your submitted");
  }    
</script>
@endsection