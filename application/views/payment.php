<style>
         .bkash-content {
            width: 350px;
            margin: 0 auto;
        }
        .bkash-payment{
            background-color: #DF1D6F;
        }
       
        .bkash-banner{
            background-color: #ffffff;
            padding: 15px;
        }
        img{
            width: 100%;
        }
        .woner-details {
            background: #DF1E6F;
            box-shadow: 0 0 16px #00000057;
            padding: 15px;
            border-radius: 12px;
            color: #ffffff;
        }
        .bkash-btn {
            background-color: #BB235E;
            color: #ffffff;
            box-shadow: 0 -2px 3px #ffffff87;
            padding: 5px 30px;
            font-size: 14px;
        }

        /* nagad */

        .nagad-content {
            width: 350px;
            margin: 0 auto;
        }
        .nagad-payment{
           background-color: #F1F1F1;
        }
       
        .nagad-banner {
            background: #E5E6E8;
            padding: 10px 50px;
            border-bottom: 2px solid #ccc;
        }
        img{
            width: 100%;
        }
        .nagad-woner-details {
        background: #d5dedf;
        padding: 20px 15px;
        border-radius: 4px;
        color: #000000;
        margin-bottom: 40px!important;
    }
        .nagad-btn {
            background-color: #ffffff00;
            color: #ffffff;
            box-shadow: 0 -2px 3px #ffffff;
            padding: 5px 30px;
            font-size: 14px;
            border: 1px solid #fff;
        }

        .nagad-logo {
        width: 200px;
      }
      .nagad-bg {
            background: url(assets/images/nagad-bg.png);
           background-size: 100% 100%;
            padding-bottom: 30px;
        }
        .nagad-banner img {
    width: 160px;
    margin: 0 auto;
}

        /* nav pisl */

        .nav{
            display: flex;
            justify-content: center;
            background: #233A56;
            width: 350px;
            margin: 0 auto;
            padding: 14px 0;
            border-radius: 8px;
        }
        .nav-link.active:before{
            content: inherit;
        }
        .nav-pills .nav-link{
            color: #ffffff;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
            background-color: #3f577a!important;
        }
    </style>

<!-- all data -->
<div id="allData" class="all-data">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card p-4">
                        <h3 class="fw-bold">পেমেন্ট</h3>
                        <p class="mb-0">ভর্তি ফর্ম বাবদ 100 টাকা প্রযোজ্য</p>
                        <hr>
                        <div class="bkash fs-14">
                            <h5 class="fw-bold" style="color: #E3106E;">বিকাশ পেমেন্ট মেথড</h5>
                            <ul class="list-unstyled">
                                <li>
                                    ১। *২৪৭# ডায়াল করে বিকাশ মোবাইল মেন্যুতে যান
                                </li>
                                <li>২। বিকাশ মোবাইল মেন্যু থেকে সেন্ড মানি অপশনটি সিলেক্ট করুন</li>
                                <li>
                                    ৩। আমাদের বিকাশ নাম্বারটি বসান ( +8801780099611 )
                                </li>
                                <li>৪। টাকার পরিমান বসান ( 100tk )</li>
                                <li>
                                   ৫। রেফারেল নাম্বার হিসেবে 5 বসান
                                </li>
                                <li>
                                    ৬। আপনার পিন নাম্বার দিয়ে পেমেন্ট কনফার্ম করুন
                                </li>
                            </ul>
                        </div>
                        <div class="nagad fs-14">
                            <h5 class="fw-bold" style="color:#F7941D;">নগদ পেমেন্ট মেথড</h5>
                            <ul class="list-unstyled">
                                <li>
                                    ১। *নগদ# ডায়াল করে নগদ মোবাইল মেন্যুতে যান
                                </li>
                                <li>২। নগদ মোবাইল মেন্যু থেকে সেন্ড মানি অপশনটি সিলেক্ট করুন</li>
                                <li>
                                    ৩। আমাদের নগদ নাম্বারটি বসান ( +8801921808682 )
                                </li>
                                <li>৪। টাকার পরিমান বসান ( 100tk )</li>
                                <li>
                                   ৫। রেফারেল নাম্বার হিসেবে 5 বসান
                                </li>
                                <li>
                                    ৬। আপনার পিন নাম্বার দিয়ে পেমেন্ট কনফার্ম করুন
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  payment-content">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active py-1" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Bkash</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link py-1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Nagad</button>
                    </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="bkash-content">
                            <div class="bkash-payment card pb-3">
                                <div class=" card-header my-2 border-0 p-0">
                                    <div class="bkash-banner">
                                        <img src="<?php echo base_url()?>assets/images/bkash_payment_logo.png" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="woner-details text-center mb-3">
                                        <p class="mb-1"><strong>bKash number</strong> : +8801780099611</p>
                                        <p class="mb-0"><strong>Ref</strong> : 5</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-8 m-auto">
                                            <form action="<?php base_url()?>submit-payment" method="post" class="text-center"> 
                                                <input class="d-none" type="text" name="payment_method" value="Bkash">
                                                <div class="mb-3">
                                                    <label class="form-label text-white mb-1">Your bKash account number</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="e.g 01XXXXXXXXX" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label text-white mb-1">Your Payment transection Id</label>
                                                    <input type="text" class="form-control" name="transection_id" placeholder="Transection Id" required>
                                                </div>
                                                <button type="submit" name="submit" class="btn bkash-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <!-- nagad -->

                    <div class="nagad-content">
                        <div class="nagad-payment card pb-3">
                            <div class=" card-header border-0 p-0">
                                <div class="nagad-banner">
                                    <img src="<?php echo base_url()?>assets/images/Nagad.png" alt="">
                                </div>
                            </div>
                            <div class="card-body nagad-bg">
                                <div class="nagad-woner-details text-center mb-3">
                                    <p class="mb-1"><strong>Nagad number</strong> : +8801921808682</p>
                                    <p class="mb-0"><strong>Ref</strong> : 5</p>
                                </div>
                                <div class="row">
                                    <div class="col-8 m-auto py-5">
                                        <form action="<?php base_url()?>submit-payment" method="post" class="text-center"> 
                                            <input class="d-none" type="text" name="payment_method" value="Nagad">
                                            <div class="mb-3">
                                                <label class="form-label text-white mb-1">Your nagad account number</label>
                                                <input type="text" class="form-control" name="phone" placeholder="e.g 01XXXXXXXXX" required>
                                            </div>
                                            <div class="mb-3">
                                                <label  class="form-label text-white mb-1">Your Payment transection Id</label>
                                                <input type="text" class="form-control" name="transection_id" placeholder="Transection Id" required>
                                            </div>
                                            <button type="submit" name="submit" class="btn nagad-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nagad -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- all data -->