<style>
  /* breweries styles */
  .breweries1 {
    padding: 2rem;
  }

  .breweries1>ul {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    grid-gap: 1rem;
    list-style-type: none;
  }

  .breweries1>ul>li {
    border: 1px solid #e2e2e2;
    border-radius: 0.5rem;
  }

  .breweries1>ul>li>figure {
    max-height: 220px;
    overflow: hidden;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    position: relative;
  }

  .breweries1>ul>li>figure>img {
    width: 100%;
  }

  .breweries1>ul>li>figure>figcaption {
    position: absolute;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    width: 100%;
  }

  .breweries1>ul>li>figure>figcaption>h3 {
    color: white;
    padding: 0.75rem;
    font-size: 1.25rem;
  }

  .breweries1>ul>li>p {
    font-size: 1rem;
    line-height: 1.5;
    padding: 1rem 0.75rem;
    color: #666666;
  }

  .breweries1>ul>li>a {
    padding: 0.5rem 1rem;
    margin: 0.5rem;
  }
</style>
<main class="wrapper">
  <section class="breweries1" id="breweries1">
    <ul id="dynamic_content">
    </ul>
  </section>
</main>
<script>
  $(document).ready(function() {
    
    $('#dynamic_content').html(make_skeleton());

    setTimeout(function() {
      load_content(5);
    }, 2000);

    function make_skeleton() {
      var output = '';
      for (var count = 0; count < 3; count++) {
        output += '<div class="ph-item">';
        output += '<div class="ph-col-12">';
        output += '<div class="ph-picture"></div>';
        output += '</div>';
        output += '<div>';
        output += '<div class="ph-row">';
        output += '<div class="ph-col-12 big"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '<div class="ph-col-12"></div>';
        output += '</div>';
        output += '</div>';
        output += '</div>';
      }

      return output;
    }

    function load_content() {
      $.ajax({
        url: globalUrl.baseUrl+'order',
        method: "GET",
        success: function(data) {
          $('#dynamic_content').empty();
          console.log(data);
          var result = data.data;
          result.forEach(res => {
            var output = '<li>\
                              <figure>\
                                  <img src="' + res.user.photo + '" alt="">\
                                  <figcaption>\
                                      <h3>'+res.category.description+'</h3>\
                                  </figcaption>\
                              </figure>\
                              <p>'+res.category.description+'</p>\
                              <a href="#" class="browser-link">'+res.category.name+'</a>\
                          </li>';
            $('#dynamic_content').append(output);
          })
        }
      })
    }
  })
</script>