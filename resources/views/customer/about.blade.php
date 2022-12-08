@extends('../layouts.customer')
@section('navbar')
    @include('../partials.customer.navbar')
@endsection

@section('content')
<header class="py-2" style="
background: #bdc3c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h4 class="">ABOUT US</h4>
        </div>
    </div>
</header>

<section class="py-5" style="min-height: 70vh;">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card ">
                <div class="card-body">
                    <b class="p-4 text-center">
                        This business created because of group of 4 friends who had a full of dreams and wants to accomplish something in their life. The ANDJ in ANDJ Bright Printing Services actually have a meaning of it. A stand for Analyn, N for Novy, D for Daisy and J for Josh. This business is known for selling a computer consumable like, printer, ink, toners and etc. They started their business with a government PLDT business directory where we find our client there.
                            ANDJ Bright Printing Services founded in January 16, 2013 where their general manager is Josh Alcaraz and the other 3 manager. Their main office is located at 1760-1D Firmeza Street Sampaloc Manila
                    </b>
                </div>
            </div>
            <br>
            <div class="card ">
                <div class="card-body row">
                    <div class="col-md-6 text-center">
                        <b class="">
                        Emails:  <br>
                            novygracesaguid@yahoo.com.ph  <br>
                            joshalcaraz1784@yahoo.com
                        </b>
                    </div>
                    <div class="col-md-6 text-center">
                        <b class="">
                        Telephone:  <br>
                            8354-8393  , 8354-8214 <br>
                            8510-5463
                        </b>
                    </div>
                    
                </div>
            </div>
        </div>
        
     
    </div>
    
</section>

@endsection

@section('script')
<script>

</script>
@endsection






