<div class="my-5 pb-5">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed without_arrow" type="button">
                    <a href="{{ url('account/panel/overview') }}" class="text-decoration-none">
                        @if ($activeNav === 'Overview')
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-overview-328c59-20.png') }}" alt="Overview">
                            <span class="text_color_default  fw-bold">Overview</span>
                        @else
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-overview-777777-20.png') }}" alt="Overview">
                            <span class="text_color_7 ">Overview</span>
                        @endif
                    </a>
                </button>
            </h2>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="left_menu_messages_heading">
                @if($activeNav === 'Messages - Inbox' || $activeNav === 'Messages - Sent' || $activeNav === 'Messages - Archive' || $activeNav === 'Messages - Spam' || $activeNav === 'Messages - Trash')
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_messages_body" aria-expanded="true" aria-controls="left_menu_messages_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-messages-328c59-20.png') }}" alt="Messages">
                            <span class="text_color_default fw-bold">Messages</span>
                        </a>
                    </button>
                @else
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_messages_body" aria-expanded="false" aria-controls="left_menu_messages_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-messages-777777-20.png') }}" alt="Messages">
                            <span class="text_color_7">Messages</span>
                        </a>
                    </button>
                @endif
            </h2>
            <div id="left_menu_messages_body" class="accordion-collapse collapse @if ($activeNav === 'Messages - Inbox' || $activeNav === 'Messages - Sent' || $activeNav === 'Messages - Archive' || $activeNav === 'Messages - Spam' || $activeNav === 'Messages - Trash') show @endif" aria-labelledby="left_menu_messages_heading" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div><a href="{{ url('/account/panel/messages/inbox') }}" class="text-decoration-none @if ($activeNav === 'Messages - Inbox') text_color_default fw-bold @endif ">Inbox <span id="unread_message_counter"></span></a></div>
                    <div><a href="{{ url('/account/panel/messages/sent') }}" class="text-decoration-none @if ($activeNav === 'Messages - Sent') text_color_default fw-bold @endif ">Sent</a></div>
                    <div><a href="{{ url('/account/panel/messages/archive') }}" class="text-decoration-none @if ($activeNav === 'Messages - Archive') text_color_default fw-bold @endif ">Archive</a></div>
                    <div><a href="{{ url('/account/panel/messages/trash') }}" class="text-decoration-none @if ($activeNav === 'Messages - Trash') text_color_default fw-bold @endif ">Trash</a></div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="left_menu_addresses_heading">
                <button class="accordion-button collapsed without_arrow" type="button">
                    @if($activeNav === 'Addresses')
                        <a href="{{ url('/account/panel/addresses') }}" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-address-328c59-20.png') }}" alt="Addresses">
                            <span class="text_color_default fw-bold">Addresses</span>
                        </a>
                    @else
                        <a href="{{ url('/account/panel/addresses') }}" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-address-777777-20.png') }}" alt="Addresses">
                            <span class="text_color_7">Addresses</span>
                        </a>
                    @endif
                </button>
            </h2>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed without_arrow" type="button">
                    <a href="{{ url('/account/panel/my-wallet') }}" class="text-decoration-none">
                        @if ($activeNav === 'My Wallet')
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-wallet-328c59-20.png') }}" alt="My Wallet">
                            <span class=" text_color_default fw-bold">My Wallet</span>
                        @else
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-wallet-777777-20.png') }}" alt="My Wallet">
                            <span class=" text_color_7">My Wallet</span>
                        @endif
                    </a>
                </button>
            </h2>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="left_menu_payments_heading">
                @if($activeNav === 'Payments - Summary' || $activeNav === 'Payments - Get Paid' || $activeNav === 'Payments - Transactions' || $activeNav === 'Payments - Payouts' || $activeNav === 'Payments - Payout Settings')
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_payments_body" aria-expanded="true" aria-controls="left_menu_payments_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-payment-328c59-20.png') }}" alt="Payments">
                            <span class="text_color_default fw-bold">Payments</span>
                        </a>
                    </button>
                @else
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_payments_body" aria-expanded="false" aria-controls="left_menu_payments_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-payment-777777-20.png') }}" alt="Payments">
                            <span class="text_color_7">Payments</span>
                        </a>
                    </button>
                @endif
            </h2>
            <div id="left_menu_payments_body" class="accordion-collapse collapse @if ($activeNav === 'Payments - Summary' || $activeNav === 'Payments - Get Paid' || $activeNav === 'Payments - Transactions' || $activeNav === 'Payments - Payouts' || $activeNav === 'Payments - Payout Settings') show @endif" aria-labelledby="left_menu_payments_heading" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div><a href="{{ url('/account/panel/payments/summary') }}" class="text-decoration-none @if ($activeNav === 'Payments - Summary') text_color_default fw-bold @endif ">Summary</a></div>
                    <div><a href="{{ url('/account/panel/payments/get-paid') }}" class="text-decoration-none @if ($activeNav === 'Payments - Get Paid') text_color_default fw-bold @endif ">Get Paid</a></div>
                    <div><a href="{{ url('/account/panel/payments/transactions') }}" class="text-decoration-none @if ($activeNav === 'Payments - Transactions') text_color_default fw-bold @endif ">Transactions</a></div>
                    <div><a href="{{ url('/account/panel/payments/payouts') }}" class="text-decoration-none @if ($activeNav === 'Payments - Payouts') text_color_default fw-bold @endif ">Payouts</a></div>
                    <div><a href="{{ url('/account/panel/payments/payout-settings') }}" class="text-decoration-none @if ($activeNav === 'Payments - Payout Settings') text_color_default fw-bold @endif ">Payout Settings</a></div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed without_arrow" type="button">
                    <a href="{{ url('/account/panel/feedbacks') }}" class="text-decoration-none">
                        @if ($activeNav === 'Feedbacks')
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-feedback-328c59-20.png') }}" alt="Feedbacks">
                            <span class=" text_color_default fw-bold">Feedbacks</span>
                        @else
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-feedback-777777-20.png') }}" alt="Feedbacks">
                            <span class=" text_color_7">Feedbacks</span>
                        @endif
                    </a>
                </button>
            </h2>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="left_menu_my_buying_heading">
                @if($activeNav === 'My Buying - Purchase History' || $activeNav === 'My Buying - Watched' || $activeNav === 'My Buying - Viewed')
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_my_buying_body" aria-expanded="true" aria-controls="left_menu_my_buying_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-buy-328c59-20.png') }}" alt="Buy">
                            <span class="text_color_default  fw-bold">My Buying</span>
                        </a>
                    </button>
                @else
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_my_buying_body" aria-expanded="false" aria-controls="left_menu_my_buying_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-buy-777777-20.png') }}" alt="Buy">
                            <span class="text_color_7 ">My Buying</span>
                        </a>
                    </button>
                @endif
            </h2>
            <div id="left_menu_my_buying_body" class="accordion-collapse collapse @if ($activeNav === 'My Buying - Purchase History' || $activeNav === 'My Buying - Watched' || $activeNav === 'My Buying - Viewed') show @endif" aria-labelledby="left_menu_my_buying_heading" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div><a href="{{ url('/account/panel/my-buying/purchased') }}" class="text-decoration-none @if ($activeNav === 'My Buying - Purchase History') text_color_default fw-bold @endif ">Purchased</a></div>
                    <div><a href="{{ url('/account/panel/my-buying/returned') }}" class="text-decoration-none @if ($activeNav === 'My Buying - Returned') text_color_default fw-bold @endif ">Returned</a></div>
                    <div><a href="{{ url('/account/panel/my-buying/watched') }}" class="text-decoration-none @if ($activeNav === 'My Buying - Watched') text_color_default fw-bold @endif ">Watched</a></div>
                    <div><a href="{{ url('/account/panel/my-buying/archived') }}" class="text-decoration-none @if ($activeNav === 'My Buying - Archived') text_color_default fw-bold @endif ">Archived</a></div>
                    <div><a href="{{ url('/account/panel/my-buying/viewed') }}" class="text-decoration-none @if ($activeNav === 'My Buying - Viewed') text_color_default fw-bold @endif ">Viewed</a></div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="left_menu_my_selling_heading">
                @if($activeNav === 'My Selling - Active' || $activeNav === 'My Selling - Orders' || $activeNav === 'My Selling - Buyer Offer' || $activeNav === 'My Selling - Payments' || $activeNav === 'My Selling - Sold' || $activeNav === 'My Selling - Unsold' || $activeNav === 'My Selling - Delivered' || $activeNav === 'My Selling - Returned' ||  $activeNav === 'My Selling - Deleted')
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_my_selling_body" aria-expanded="true" aria-controls="left_menu_my_selling_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-sell-328c59-20.png') }}" alt="Sell">
                            <span class=" text_color_default fw-bold">My Selling</span>
                        </a>
                    </button>
                @else
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#left_menu_my_selling_body" aria-expanded="false" aria-controls="left_menu_my_selling_body">
                        <a href="javascript:void(0)" class="text-decoration-none">
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-sell-777777-20.png') }}" alt="Sell">
                            <span class=" text_color_7">My Selling</span>
                        </a>
                    </button>
                @endif
            </h2>
            <div id="left_menu_my_selling_body" class="accordion-collapse collapse @if ($activeNav === 'My Selling - Active' || $activeNav === 'My Selling - Orders' || $activeNav === 'My Selling - Buyer Offer' || $activeNav === 'My Selling - Payments' || $activeNav === 'My Selling - Sold' || $activeNav === 'My Selling - Unsold' || $activeNav === 'My Selling - Delivered' || $activeNav === 'My Selling - Returned' || $activeNav === 'My Selling - Deleted') show @endif" aria-labelledby="left_menu_my_selling_heading" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div><a href="{{ url('/account/panel/my-selling/active') }}" class="text-decoration-none @if ($activeNav === 'My Selling - Active') text_color_default fw-bold @endif ">Active</a></div>
                    <div><a href="{{ url('/account/panel/my-selling/orders') }}" class="text-decoration-none @if ($activeNav === 'My Selling - Orders') text_color_default fw-bold @endif ">Orders</a></div>
                    <div><a href="{{ url('/account/panel/my-selling/buyer-offer') }}" class="text-decoration-none @if ($activeNav === 'My Selling - Buyer Offer') text_color_default fw-bold @endif ">Buyer Offer</a></div>
                    <div><a href="{{ url('/account/panel/my-selling/payments') }}" class="text-decoration-none @if ($activeNav === 'My Selling - Payments') text_color_default fw-bold @endif ">Payments</a></div>
                    <div><a href="{{ url('/account/panel/my-selling/unsold') }}" class="text-decoration-none @if ($activeNav === 'My Selling - Unsold') text_color_default fw-bold @endif ">Unsold</a></div>
                    <div><a href="{{ url('/account/panel/my-selling/deleted') }}" class="text-decoration-none @if ($activeNav === 'My Selling - Deleted') text_color_default fw-bold @endif ">Deleted</a></div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed without_arrow" type="button">
                    <a href="{{ url('account/payment-gateway') }}" class="text-decoration-none">
                        @if ($activeNav === 'Payment Gateway')
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-payment-gateway-328c59-20.png') }}" alt="Payment Gateway">
                            <span class=" text_color_default fw-bold">Payment Gateway</span>
                        @else
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-payment-gateway-777777-20.png') }}" alt="Payment Gateway">
                            <span class=" text_color_7">Payment Gateway</span>
                        @endif
                    </a>
                </button>
            </h2>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed without_arrow" type="button">
                    <a href="{{ url('/account/panel/notification') }}" class="text-decoration-none">
                        @if ($activeNav === 'Notification')
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-notification-328c59-20.png') }}" alt="Notification">
                            <span class=" text_color_default fw-bold">Notification</span>
                        @else
                            <img src="{{ asset('/storage/images/default/AccountPanel/icons8-notification-777777-20.png') }}" alt="Notification">
                            <span class=" text_color_7">Notification</span>
                        @endif
                    </a>
                </button>
            </h2>
        </div>
    </div>

    <div class="mt-5 ps-3">
        <div>
            <a href="{{ url('/account/panel/open/requirements') }}" class="text-decoration-none">
                @if ($activeNav === 'Open Requirements')
                    <img src="{{ asset('/storage/images/default/AccountPanel/icons8-requirements-328c59-20.png') }}" alt="Open Requirements">
                    <span class=" text_color_default fw-bold">Open Requirements</span>
                @else
                    <img src="{{ asset('/storage/images/default/AccountPanel/icons8-requirements-777777-20.png') }}" alt="Open Requirements">
                    <span class=" text_color_7">Open Requirements</span>
                @endif
            </a>
        </div>
        <div class="mt-2">
            <a href="{{ url('/account/panel/settings') }}" class="text-decoration-none">
                @if ($activeNav === 'Account Settings')
                    <img src="{{ asset('/storage/images/default/AccountPanel/icons8-setting-328c59-20.png') }}" alt="Settings">
                    <span class=" text_color_default fw-bold">Settings</span>
                @else
                    <img src="{{ asset('/storage/images/default/AccountPanel/icons8-setting-777777-20.png') }}" alt="Settings">
                    <span class=" text_color_7">Settings</span>
                @endif
            </a>
        </div>
        <div class="mt-2">
            <a href="#" class="text-decoration-none">
                <img src="{{ asset('/storage/images/default/AccountPanel/icons8-logout-rounded-777777-20.png') }}" alt="Settings">
                <span class=" text_color_7">Log out</span>
            </a>
        </div>
    </div>
</div>


<script type="text/javascript">

</script>
