<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Test">
    <title>REDTAG -  TECHNICAL TEST</title>
    <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .form-label{
        color: darkgray;
      }

      .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
      }
      .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 5% auto;
        border-radius: 50%;
        border: 6px solid #fff;
        border-color: #fff transparent #fff transparent;
        animation: lds-dual-ring 1.2s linear infinite;
        top: 50%;
          position: relative;
      }
      @keyframes lds-dual-ring {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      .overlay {
        display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100vh;
          background: rgba(0,0,0,.8);
          z-index: 999;
          opacity: 1;
          transition: all 0.5s;
        }
    </style>
  </head>
  <body class="d-flex h-100 text-center text-black">
  <div id="loader" class="lds-dual-ring hidden overlay"></div>
<div class="container-md d-flex w-100 h-100 p-5 mx-auto flex-column">
  

  <main class="px-3">
    <h3 class="mb-5">Search Your Records</h3> 
    <div class="row mb-3" style="text-align: initial;">
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">HPI Type</label>
        <select class="form-select"  id="hpi_type" name="hpi_type" aria-label="Default select example">
          <option selected value="">Select Type</option>
          <option value="developmental">developmental</option>
          <option value="traditional">traditional</option>
          <option value="non-metro">non-metro</option>
          <option value="disstress-free">disstress-free</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">HPI Flavour</label>
        <select class="form-select" id="hpi_flavour" name="hpi_flavour" aria-label="Default select example">
          <option selected value="">Select Flavour</option>
          <option value="all-transactions">all-transactions</option>
          <option value="expanded-data">expanded-data</option>
          <option value="purchase-only">purchase-only</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Frequency</label>
        <select class="form-select" id="frequency" name="frequency" aria-label="Default select example">
          <option selected value="">Select Frequency</option>
          <option value="monthly">monthly</option>
          <option value="quarterly">quarterly</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Level</label>
        <select class="form-select" id="level" name="level" aria-label="Default select example">
          <option selected value="">Select Level</option>
          <option value="MSA">MSA</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="State">State</option>
          <option value="USA or Census Division">USA or Census Division</option>
        </select>
      </div>
    </div> 
    <div class="row mb-3" style="text-align: initial;">
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Place Name</label>
        <select class="form-select" id="place_name" name="place_name" aria-label="Default select example">
          <option selected value="">Select Place Name</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Place ID</label>
        <select class="form-select" id="place_id" name="place_id" aria-label="Default select example">
          <option selected value="">Select Place ID</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Year</label>
        <select class="form-select" id="yr" name="yr" aria-label="Default select example">
          <option selected value="">Select Year</option>
          <?php for($i=1975;$i<=2023;$i++){?>
             <option value="<?=$i?>"><?=$i?></option>
          <?php }?>
        </select>
      </div>
      <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Period</label>
        <select class="form-select" id="period" name="period" aria-label="Default select example">
          <option selected value="">Select Period</option>
          <?php for($i=1;$i<=12;$i++){?>
             <option value="<?=$i?>"><?=$i?></option>
          <?php }?>
        </select>
      </div>
    </div> 
    <div class="row mb-5" style="text-align: end;justify-content: flex-end;">
          <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-lg search_results" style="width:100%">SEARCH</button>
          </div>
          <div class="col-md-3">
            <button type="button" class="btn btn-danger btn-lg clear_results" style="width:100%">RESET</button>
          </div>
    </div>
    <div class="row">
      <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link prv" href="javascript:void(0)" id="btn_prev" style="display:none" >Previous</a>
    </li>
    
    <li class="page-item">
    <a class="page-link nxt" href="javascript:void(0)" id="btn_next" style="display:none">Next</a>
    </li>
  </ul>
</nav>
     <div class="table-responsive">
      <table class="table table-bordered">
         <thead class="table-light">
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Flavour</th>
            <th scope="col">Frequency</th>
            <th scope="col">Level</th>
            <th scope="col">Place Name</th>
            <th scope="col">Place ID</th>
            <th scope="col">Year</th>
            <th scope="col">Period</th>
            <th scope="col">Index NSA</th>
            <th scope="col">Index SA</th>
          </tr>
        </thead>

        <tbody id="table_data">
          <tr>
            <td colspan="10"><img style="max-width: 300px;width: 100%;padding: 10px;margin-top: 20px;" src="<?=ROOT?>/assets/images/found.svg"></td>
          </tr>
        </tbody>
      </table>
     </div>
        <input type="hidden" id="totalRecords" value="">
        <input type="hidden" id="totalPages" value="">
    </div>
  </main>
</div>
  
</body>
</html>


<script type="text/javascript">

  var rdatas = [];
  var page  = 1;

  // Previous Button Click
  document.querySelector("#btn_prev").addEventListener("click", ()=>{
    page =page >= 1 ? page-1: 1;
    searchResults(undefined, page);
  });
  // Next Button Click
  document.querySelector("#btn_next").addEventListener("click", ()=>{
     page =page+1;
     searchResults(undefined,page);

  });

  // Clear Search  Button Click
  document.querySelector(".clear_results").addEventListener("click", ()=>{
    location.reload();
  });

  // Search  Button Click
  document.querySelector(".search_results").addEventListener("click", searchResults);
  
  //Callback function called after search button clicking
  function searchResults(e, page = 1) {
        document.getElementById("loader").style.display = "block";
      
        var allinputs = document.querySelectorAll('select');
        var myLength = allinputs.length;
        var input;
        let postObject=[];
           
        for (var i = 0; i < myLength; ++i) {
          input = allinputs[i];
          if (input.value !== "") {
              postObject.push({
                [input.name]:input.value
              })
          }
        }

        if(postObject.length == 0){
          alert('Please select atleast one filtering option....');
          document.getElementById("loader").style.display = "none";
          return false;
        }

        let post = JSON.stringify(postObject)
        const url = "<?=ROOT?>/home/searchResults?page="+page;
        let xhr = new XMLHttpRequest()
      
        xhr.open('POST', url, true)
        xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
        xhr.send(post);
        xhr.onload = function () {
            if(xhr.status === 200) {
                 rdatas = JSON.parse(this.responseText);
                 document.getElementById("loader").style.display = "none";

                 // After search Append Tabledata here
                appendData(rdatas.data);

                if(rdatas.totalRecords > 20 ){
                   
                    if(page !=1){
                     document.getElementById("btn_prev").style.display = "block";
                    }else{
                       document.getElementById("btn_prev").style.display = "none";
                    }

                    if (page == +rdatas.totalPages){
                      document.getElementById("btn_next").style.display = "none";
                    } 
                    else{
                      document.getElementById("btn_next").style.display = "block";
                    }   
                }
                document.getElementById("totalRecords").setAttribute('value', +rdatas.totalRecords);
                document.getElementById("totalPages").setAttribute('value', +rdatas.totalPages);
            }
            else{
                console.log(`Error ${xhr.status}: ${xhr.statusText}`);
            }
          }
  }

//Search Data Append Function
function appendData(rdata) {
    var len = rdata.length;
    if(len ==0){
      console.log("No Data Founded");
      var table = document.getElementById('table_data');
      table.innerHTML = "";
      return false;
    }
    var table = document.getElementById('table_data');
    table.innerHTML = "";

    for (var i = 0; i < len; i++) {
        var tr = document.createElement('tr');
        var s = rdata[i];

        var td = document.createElement('td');
        td.innerHTML = s.hpi_type ? s.hpi_type : '--';;
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.hpi_flavor ? s.hpi_flavor : '--';;
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.frequency ? s.frequency : '--';;
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.level ? s.level : '--';;
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.place_name ? s.place_name : '--';
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.place_id ? s.place_id : '--';
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.yr ? s.yr : '--';
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.period ? s.period : '--';
        tr.appendChild(td);


        td = document.createElement('td');
        td.innerHTML = s.index_nsa ? s.index_nsa : '--';
        tr.appendChild(td);

        td = document.createElement('td');
        td.innerHTML = s.index_sa ? s.index_sa : '--';
        tr.appendChild(td);

        table.appendChild(tr);
    }
}
</script>