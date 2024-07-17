<style>
    .table-no-side-cell-border,
    .table-no-side-cell-border td,
    .table-no-side-cell-border th {
        border: none;
    }

    .table-no-side-cell-border tr td,
    .table-no-side-cell-border tr th {
        border-bottom: 1px solid #000;
        /* Adjust the color and width as needed */
    }

    /* Additional style to ensure visibility */
    .table-no-side-cell-border {
        border-collapse: separate;
        /* This might help if borders were collapsing */
    }
</style>

<table style="width:100%; color: #000000 !important;">
    <thead>
        <tr>
            <td>
                <p class="text-right">
                    <small class="text-muted-imp">
                        @if (!empty($receipt_details->invoice_no_prefix))
                            {!! $receipt_details->invoice_no_prefix !!}
                        @endif

                        {{ $receipt_details->invoice_no }}
                    </small>
                </p>
            </td>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="text-center" style="line-height: 15px !important; padding-bottom: 10px !important">
                @if (empty($receipt_details->letter_head))
                    @if (!empty($receipt_details->header_text))
                        {!! $receipt_details->header_text !!}
                    @endif

                    @php
                        $sub_headings = implode(
                            '<br/>',
                            array_filter([
                                $receipt_details->sub_heading_line1,
                                $receipt_details->sub_heading_line2,
                                $receipt_details->sub_heading_line3,
                                $receipt_details->sub_heading_line4,
                                $receipt_details->sub_heading_line5,
                            ]),
                        );
                    @endphp

                    @if (!empty($sub_headings))
                        <span>{!! $sub_headings !!}</span>
                    @endif
                @endif
                <!-- @if (!empty($receipt_details->invoice_heading))
<h2 style="font-weight: bold; font-size: 35px !important; margin-top: 10px;">{!! $receipt_details->invoice_heading !!}</h2>
@endif -->
            </td>
        </tr>
        <tr>
            <td>

                <!-- business information here -->
                <div class="row invoice-info">

                    <div class="col-md-6 invoice-col width-40 ">

                        @if (!empty($receipt_details->letter_head))
                            <img style="max-height: 180px; width: 80%;" src="{{ $receipt_details->letter_head }}"
                                class="img center-block">
                        @endif
                        @if (empty($receipt_details->letter_head))
                            <!-- Logo -->
                            @if (!empty($receipt_details->logo))
                                <img style="max-height: 130px; width: auto;" src="{{ $receipt_details->logo }}"
                                    class="img center-block">
                                <br />
                            @endif

                            <!-- Shop & Location Name  -->

                            <span style="font-size: 16px;">
                                @if (!empty($receipt_details->display_name))
                                    {{ $receipt_details->display_name }}
                                    <br />
                                @endif

                                @if (!empty($receipt_details->address))
                                    {!! $receipt_details->address !!}
                                @endif

                                @if (!empty($receipt_details->contact))
                                    <br />{!! $receipt_details->contact !!}
                                @endif

                                @if (!empty($receipt_details->website))
                                    <br />{{ $receipt_details->website }}
                                @endif

                                @if (!empty($receipt_details->tax_info1))
                                    <br />{{ $receipt_details->tax_label1 }} {{ $receipt_details->tax_info1 }}
                                @endif

                                @if (!empty($receipt_details->tax_info2))
                                    <br />{{ $receipt_details->tax_label2 }} {{ $receipt_details->tax_info2 }}
                                @endif

                                @if (!empty($receipt_details->location_custom_fields))
                                    <br />{{ $receipt_details->location_custom_fields }}
                                @endif
                            </span>
                        @endif
                        <!-- Table information-->
                        @if (!empty($receipt_details->table_label) || !empty($receipt_details->table))
                            <p>
                                @if (!empty($receipt_details->table_label))
                                    {!! $receipt_details->table_label !!}
                                @endif
                                {{ $receipt_details->table }}
                            </p>
                        @endif

                        <!-- Waiter info -->
                        @if (!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
                            <p>
                                @if (!empty($receipt_details->service_staff_label))
                                    {!! $receipt_details->service_staff_label !!}
                                @endif
                                {{ $receipt_details->service_staff }}
                            </p>
                        @endif



                        <div class="word-wrap">

                            <p class="text-right ">

                                @if (!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
                                    @if (!empty($receipt_details->brand_label))
                                        <span class="pull-left">
                                            <strong>{!! $receipt_details->brand_label !!}</strong>
                                        </span>
                                    @endif
                                    {{ $receipt_details->repair_brand }}<br>
                                @endif


                                @if (!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
                                    @if (!empty($receipt_details->device_label))
                                        <span class="pull-left">
                                            <strong>{!! $receipt_details->device_label !!}</strong>
                                        </span>
                                    @endif
                                    {{ $receipt_details->repair_device }}<br>
                                @endif

                                @if (!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
                                    @if (!empty($receipt_details->model_no_label))
                                        <span class="pull-left">
                                            <strong>{!! $receipt_details->model_no_label !!}</strong>
                                        </span>
                                    @endif
                                    {{ $receipt_details->repair_model_no }} <br>
                                @endif

                                @if (!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
                                    @if (!empty($receipt_details->serial_no_label))
                                        <span class="pull-left">
                                            <strong>{!! $receipt_details->serial_no_label !!}</strong>
                                        </span>
                                    @endif
                                    {{ $receipt_details->repair_serial_no }}<br>
                                @endif
                                @if (!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
                                    @if (!empty($receipt_details->repair_status_label))
                                        <span class="pull-left">
                                            <strong>{!! $receipt_details->repair_status_label !!}</strong>
                                        </span>
                                    @endif
                                    {{ $receipt_details->repair_status }}<br>
                                @endif

                                @if (!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
                                    @if (!empty($receipt_details->repair_warranty_label))
                                        <span class="pull-left">
                                            <strong>{!! $receipt_details->repair_warranty_label !!}</strong>
                                        </span>
                                    @endif
                                    {{ $receipt_details->repair_warranty }}
                                    <br>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 invoice-col width-60" style="padding-left: 10%">
                        <!-- Invoice No -->
                        <div
                            style="font-size: 24px; font-weight: bold; text-transform: uppercase; color: #063970 !important;">
                            @if (!empty($receipt_details->invoice_no_prefix))
                                <p class="pull-left" style="color: #063970 !important;">{!! $receipt_details->invoice_no_prefix !!} {{ $receipt_details->invoice_no }}</p><br />
                            @endif

                            <p class="pull-left">
                                
                            </p><br />
                        </div>

                        <!-- Total Due-->
                        {{-- @if (!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
			<br/><div class="bg-light-blue-active text-right font-16 padding-5" style="font-size: 16px; text-transform: capitalize;">
				<span class="pull-left bg-light-blue-active">
					{!! $receipt_details->total_due_label !!}
				</span>

				{{$receipt_details->total_due}}
			</div>
		@endif

		@if (!empty($receipt_details->all_due))
			<div class="bg-light-blue-active text-right font-16 padding-5" style="font-size: 16px; text-transform: capitalize;">
				<span class="pull-left bg-light-blue-active">
					{!! $receipt_details->all_bal_label !!}
				</span>

				{{$receipt_details->all_due}}
			</div>
		@endif --}}

                        <!-- Total Paid-->
                        @if (!empty($receipt_details->total_paid))
                            <div class="text-right font-16 " style="font-size: 16px; text-transform: capitalize;">
                                <span class="pull-left">{!! $receipt_details->total_paid_label !!}</span>
                                {{ $receipt_details->total_paid }}
                            </div>
                        @endif
                        <!-- Date-->
                        @if (!empty($receipt_details->date_label))
                            <div class="text-right font-16 " style="font-size: 16px;">
                                <span class="pull-left">
                                    <strong>{{ $receipt_details->date_label }}:</strong>
                                    {{ $receipt_details->invoice_date }}
                                </span>

                            </div><br />
                        @endif

                        @if (!empty($receipt_details->due_date_label))
                            <div class="text-right font-16 " style="font-size: 16px;">
                                <span class="pull-left">
                                    {{ $receipt_details->due_date_label }}
                                    {{ $receipt_details->due_date ?? '' }}
                                </span>

                            </div>
                        @endif

                        @if (!empty($receipt_details->sell_custom_field_1_value))
                            <div class="text-right font-16 " style="font-size: 16px; text-transform: capitalize;">
                                <span class="pull-left">
                                    {{ $receipt_details->sell_custom_field_1_label }}
                                </span>

                                {{ $receipt_details->sell_custom_field_1_value }}
                            </div>
                        @endif
                        @if (!empty($receipt_details->sell_custom_field_2_value))
                            <div class="text-right font-16 " style="font-size: 16px; text-transform: capitalize;">
                                <span class="pull-left">
                                    {{ $receipt_details->sell_custom_field_2_label }}
                                </span>

                                {{ $receipt_details->sell_custom_field_2_value }}
                            </div>
                        @endif
                        @if (!empty($receipt_details->sell_custom_field_3_value))
                            <div class="text-right font-16 " style="font-size: 16px; text-transform: capitalize;">
                                <span class="pull-left">
                                    {{ $receipt_details->sell_custom_field_3_label }}
                                </span>

                                {{ $receipt_details->sell_custom_field_3_value }}
                            </div>
                        @endif
                        @if (!empty($receipt_details->sell_custom_field_4_value))
                            <div class="text-right font-16 " style="font-size: 16px; text-transform: capitalize;">
                                <span class="pull-left">
                                    {{ $receipt_details->sell_custom_field_4_label }}
                                </span>

                                {{ $receipt_details->sell_custom_field_4_value }}
                            </div>
                        @endif

                        <!-- Customer Information -->
                        <div class="" style="font-size: 16px;">
                            @if (!empty($receipt_details->customer_label))
                                <br /><b>{{ $receipt_details->customer_label }}:</b><br />
                            @endif

                            <!-- customer info -->
                            @if (!empty($receipt_details->customer_info))
                                {!! $receipt_details->customer_info !!}
                            @endif
                            @if (!empty($receipt_details->client_id_label))
                                <br />
                                <strong>{{ $receipt_details->client_id_label }}</strong>
                                {{ $receipt_details->client_id }}
                            @endif
                            @if (!empty($receipt_details->customer_tax_label))
                                <br />
                                <strong>{{ $receipt_details->customer_tax_label }}</strong>
                                {{ $receipt_details->customer_tax_number }}
                            @endif
                            @if (!empty($receipt_details->customer_custom_fields))
                                <br />{!! $receipt_details->customer_custom_fields !!}
                            @endif
                            @if (!empty($receipt_details->sales_person_label))
                                <br />
                                <strong>{{ $receipt_details->sales_person_label }}</strong>
                                {{ $receipt_details->sales_person }}
                            @endif

                            @if (!empty($receipt_details->commission_agent_label))
                                <br />
                                <strong>{{ $receipt_details->commission_agent_label }}</strong>
                                {{ $receipt_details->commission_agent }}
                            @endif

                            @if (!empty($receipt_details->customer_rp_label))
                                <br />
                                <strong>{{ $receipt_details->customer_rp_label }}</strong>
                                {{ $receipt_details->customer_total_rp }}
                            @endif

                            <!-- Display type of service details -->
                            @if (!empty($receipt_details->types_of_service))
                                <span class="pull-left text-left">
                                    <strong>{!! $receipt_details->types_of_service_label !!}:</strong>
                                    {{ $receipt_details->types_of_service }}
                                    <!-- Waiter info -->
                                    @if (!empty($receipt_details->types_of_service_custom_fields))
                                        <br>
                                        @foreach ($receipt_details->types_of_service_custom_fields as $key => $value)
                                            <strong>{{ $key }}: </strong> {{ $value }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    @endif
                                </span>
                            @endif
                        </div>

                    </div>

                </div>
                @if (!empty($receipt_details->shipping_custom_field_1_label) || !empty($receipt_details->shipping_custom_field_2_label))
                    <div class="row">
                        <div class="col-xs-6">
                            @if (!empty($receipt_details->shipping_custom_field_1_label))
                                <strong>{!! $receipt_details->shipping_custom_field_1_label !!} :</strong> {!! $receipt_details->shipping_custom_field_1_value ?? '' !!}
                            @endif
                        </div>
                        <div class="col-xs-6">
                            @if (!empty($receipt_details->shipping_custom_field_2_label))
                                <strong>{!! $receipt_details->shipping_custom_field_2_label !!}:</strong> {!! $receipt_details->shipping_custom_field_2_value ?? '' !!}
                            @endif
                        </div>
                    </div>
                @endif
                @if (!empty($receipt_details->shipping_custom_field_3_label) || !empty($receipt_details->shipping_custom_field_4_label))
                    <div class="row">
                        <div class="col-xs-6">
                            @if (!empty($receipt_details->shipping_custom_field_3_label))
                                <strong>{!! $receipt_details->shipping_custom_field_3_label !!} :</strong> {!! $receipt_details->shipping_custom_field_3_value ?? '' !!}
                            @endif
                        </div>
                        <div class="col-xs-6">
                            @if (!empty($receipt_details->shipping_custom_field_4_label))
                                <strong>{!! $receipt_details->shipping_custom_field_4_label !!}:</strong> {!! $receipt_details->shipping_custom_field_4_value ?? '' !!}
                            @endif
                        </div>
                    </div>
                @endif
                @if (!empty($receipt_details->shipping_custom_field_5_label))
                    <div class="row">
                        <div class="col-xs-6">
                            @if (!empty($receipt_details->shipping_custom_field_5_label))
                                <strong>{!! $receipt_details->shipping_custom_field_5_label !!} :</strong> {!! $receipt_details->shipping_custom_field_5_value ?? '' !!}
                            @endif
                        </div>
                    </div>
                @endif
                @if (!empty($receipt_details->sale_orders_invoice_no) || !empty($receipt_details->sale_orders_invoice_date))
                    <div class="row">
                        <div class="col-xs-6">
                            <strong>@lang('restaurant.order_no'):</strong> {!! $receipt_details->sale_orders_invoice_no ?? '' !!}
                        </div>
                        <div class="col-xs-6">
                            <strong>@lang('lang_v1.order_dates'):</strong> {!! $receipt_details->sale_orders_invoice_date ?? '' !!}
                        </div>
                    </div>
                @endif
                <div class="row">
                    @includeIf('sale_pos.receipts.partial.common_repair_invoice')
                </div>
                <div class="row  mt-5" style="padding: 20px;">
                    <div class="col-xs-12" style="width: 100%;">
                        <table class="table mb-12" style="width: 100%;">
                            <thead>
                                <tr style="background-color: #063970 !important; color: white !important; font-size: 16px !important; width: 100% !important;"
                                    class="table-no-side-cell-border table-no-top-cell-border text-center">
                                    <td
                                        style="background-color: #063970 !important; color: white !important; !important">
                                        #</td>

                                    @php
                                        $p_width = 40;
                                    @endphp
                                    @if ($receipt_details->show_cat_code == 1)
                                        @php
                                            $p_width -= 10;
                                        @endphp
                                    @endif
                                    @if (!empty($receipt_details->item_discount_label))
                                        @php
                                            $p_width -= 10;
                                        @endphp
                                    @endif
                                    @if (!empty($receipt_details->discounted_unit_price_label))
                                        @php
                                            $p_width -= 5;
                                        @endphp
                                    @endif
                                    <td style="background-color: #063970 !important; color: white !important;">
                                        {{ $receipt_details->table_product_label }}
                                    </td>

                                    @if ($receipt_details->show_cat_code == 1)
                                        <td style="background-color: #063970 !important; color: white !important;">
                                            {{ $receipt_details->cat_code_label }}</td>
                                    @endif

                                    <td style="background-color: #063970 !important; color: white !important;">
                                        {{ $receipt_details->table_qty_label }}
                                    </td>
                                    <td style="background-color: #063970 !important; color: white !important;">
                                        {{ $receipt_details->table_unit_price_label }}
                                    </td>
                                    @if (!empty($receipt_details->discounted_unit_price_label))
                                        <td style="background-color: #063970 !important; color: white !important;">
                                            {{ $receipt_details->discounted_unit_price_label }}
                                        </td>
                                    @endif
                                    @if (!empty($receipt_details->item_discount_label))
                                        <td style="background-color: #063970 !important; color: white !important;">
                                            {{ $receipt_details->item_discount_label }}
                                        </td>
                                    @endif
                                    <td style="background-color: #063970 !important; color: white !important;">
                                        {{ $receipt_details->table_subtotal_label }}
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $subtotal = 0;
                                @endphp
                                @foreach ($receipt_details->lines as $line)
                                    <tr style="border-bottom: 2px solid black; padding: 30px; margin: 0 20px;">
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            @if (!empty($line['image']))
                                                <img src="{{ $line['image'] }}" alt="Image" width="50"
                                                    style="float: left; margin-right: 8px;">
                                            @endif
                                            {{ $line['name'] }} {{ $line['product_variation'] }}
                                            {{ $line['variation'] }}
                                            @if (!empty($line['sub_sku']))
                                                , {{ $line['sub_sku'] }}
                                                @endif @if (!empty($line['brand']))
                                                    , {{ $line['brand'] }}
                                                @endif
                                                @if (!empty($line['product_custom_fields']))
                                                    , {{ $line['product_custom_fields'] }}
                                                @endif
                                                @if (!empty($line['product_description']))
                                                    <small>
                                                        {!! $line['product_description'] !!}
                                                    </small>
                                                @endif
                                                @if (!empty($line['sell_line_note']))
                                                    <br>
                                                    <small>{!! $line['sell_line_note'] !!}</small>
                                                @endif
                                                @if (!empty($line['lot_number']))
                                                    <br> {{ $line['lot_number_label'] }}: {{ $line['lot_number'] }}
                                                @endif
                                                @if (!empty($line['product_expiry']))
                                                    , {{ $line['product_expiry_label'] }}:
                                                    {{ $line['product_expiry'] }}
                                                @endif

                                                @if (!empty($line['warranty_name']))
                                                    <br><small>{{ $line['warranty_name'] }} </small>
                                                    @endif @if (!empty($line['warranty_exp_date']))
                                                        <small>- {{ @format_date($line['warranty_exp_date']) }}
                                                        </small>
                                                    @endif
                                                    @if (!empty($line['warranty_description']))
                                                        <small> {{ $line['warranty_description'] ?? '' }}</small>
                                                    @endif

                                                    @if ($receipt_details->show_base_unit_details && $line['quantity'] && $line['base_unit_multiplier'] !== 1)
                                                        <br><small>
                                                            1 {{ $line['units'] }} =
                                                            {{ $line['base_unit_multiplier'] }}
                                                            {{ $line['base_unit_name'] }} <br>
                                                            {{ $line['base_unit_price'] }} x
                                                            {{ $line['orig_quantity'] }} = {{ $line['line_total'] }}
                                                        </small>
                                                    @endif
                                        </td>

                                        @if ($receipt_details->show_cat_code == 1)
                                            <td>
                                                @if (!empty($line['cat_code']))
                                                    {{ $line['cat_code'] }}
                                                @endif
                                            </td>
                                        @endif

                                        <td class="text-center">
                                            {{ $line['quantity'] }} {{ $line['units'] }}

                                            @if ($receipt_details->show_base_unit_details && $line['quantity'] && $line['base_unit_multiplier'] !== 1)
                                                <br><small>
                                                    {{ $line['quantity'] }} x {{ $line['base_unit_multiplier'] }} =
                                                    {{ $line['orig_quantity'] }} {{ $line['base_unit_name'] }}
                                                </small>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{ $line['unit_price_before_discount'] }}
                                        </td>
                                        @if (!empty($receipt_details->discounted_unit_price_label))
                                            <td class="text-center">
                                                {{ $line['unit_price_inc_tax'] }}
                                            </td>
                                        @endif

                                        @if (!empty($receipt_details->item_discount_label))
                                            <td class="text-center">
                                                {{ $line['total_line_discount'] ?? '0.00' }}
                                                @if (!empty($line['line_discount_percent']))
                                                    ({{ $line['line_discount_percent'] }}%)
                                                @endif
                                            </td>
                                        @endif
                                        <td class="text-center">
                                            {{ $line['line_total_exc_tax'] }}
                                        </td>
                                    </tr>
                                    @if (!empty($line['modifiers']))
                                        @foreach ($line['modifiers'] as $modifier)
                                            <tr>
                                                <td class="text-center">
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    {{ $modifier['name'] }} {{ $modifier['variation'] }}
                                                    @if (!empty($modifier['sub_sku']))
                                                        , {{ $modifier['sub_sku'] }}
                                                    @endif
                                                    @if (!empty($modifier['sell_line_note']))
                                                        ({!! $modifier['sell_line_note'] !!})
                                                    @endif
                                                </td>

                                                @if ($receipt_details->show_cat_code == 1)
                                                    <td>
                                                        @if (!empty($modifier['cat_code']))
                                                            {{ $modifier['cat_code'] }}
                                                        @endif
                                                    </td>
                                                @endif

                                                <td class="text-right">
                                                    {{ $modifier['quantity'] }} {{ $modifier['units'] }}
                                                </td>
                                                <td class="text-right">
                                                    {{ $modifier['unit_price_exc_tax'] }}
                                                </td>
                                                @if (!empty($receipt_details->discounted_unit_price_label))
                                                    <td class="text-right">{{ $modifier['unit_price_exc_tax'] }}</td>
                                                @endif
                                                @if (!empty($receipt_details->item_discount_label))
                                                    <td class="text-right">0.00</td>
                                                @endif
                                                <td class="text-right">
                                                    {{ $modifier['line_total'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach

                                @php
                                    $lines = count($receipt_details->lines);
                                @endphp

                                @for ($i = $lines; $i < 7; $i++)
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        @if (!empty($receipt_details->discounted_unit_price_label))
                                            <td></td>
                                        @endif
                                        @if (!empty($receipt_details->item_discount_label))
                                            <td></td>
                                        @endif
                                    </tr>
                                @endfor

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row invoice-info " style="page-break-inside: avoid !important">
					<!-- invoice bottom left -->
                    <div class="col-md-6 invoice-col width-40" style="margin-left: 30px;">
                        <table class="table table-slim">
                            @if (!empty($receipt_details->payments))
                                @foreach ($receipt_details->payments as $payment)
                                    <tr>
                                        <td>{{ $payment['method'] }}</td>
                                        <td>{{ $payment['amount'] }}</td>
                                        <td>{{ $payment['date'] }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                        <b class="pull-left"
                            style="width: 100%; padding-bottom: 60px; border-bottom: 2px dashed black">{{ __('lang_v1.authorized_signatory') }}</b>

                        <table>
							<tr>&nbsp;</tr>
							<tr>&nbsp;</tr>
                            <tr>
                                <td><h4 style="color: #063970 !important; font-weight: bold; font-size: 20px;">Thank you for your Business</h4></td>
                            </tr>
                        </table>
                    </div>

                    <!-- Invoice Content bottom right -->
                    <div class="col-md-6 invoice-col width-40" style="margin-left: 80px;">
                        <table class="table-no-side-cell-border table-no-top-cell-border width-100 table-slim">
                            <tbody>
                                @if (!empty($receipt_details->total_quantity_label))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="width:50%; border-bottom: 1px solid #000;">
                                            {!! $receipt_details->total_quantity_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            {{ $receipt_details->total_quantity }}
                                        </td>
                                    </tr>
                                @endif
                                @if (!empty($receipt_details->total_items_label))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="width:50%; border-bottom: 1px solid #000;">
                                            {!! $receipt_details->total_items_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            {{ $receipt_details->total_items }}
                                        </td>
                                    </tr>
                                @endif
                                <tr style="border-bottom: 1px solid #000;">
                                    <td style="width:50%; border-bottom: 1px solid #000;">
                                        {!! $receipt_details->subtotal_label !!}
                                    </td>
                                    <td class="text-right" style="border-bottom: 1px solid #000;">
                                        {{ $receipt_details->subtotal_exc_tax }}
                                    </td>
                                </tr>

                                <!-- Shipping Charges -->
                                @if (!empty($receipt_details->shipping_charges))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="width:50%; border-bottom: 1px solid #000;">
                                            {!! $receipt_details->shipping_charges_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            {{ $receipt_details->shipping_charges }}
                                        </td>
                                    </tr>
                                @endif

                                @if (!empty($receipt_details->packing_charge))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="width:50%; border-bottom: 1px solid #000;">
                                            {!! $receipt_details->packing_charge_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            {{ $receipt_details->packing_charge }}
                                        </td>
                                    </tr>
                                @endif

                                <!-- Tax -->
                                @if (!empty($receipt_details->taxes))
                                    @foreach ($receipt_details->taxes as $k => $v)
                                        <tr style="border-bottom: 1px solid #000;">
                                            <td style="border-bottom: 1px solid #000;">{{ $k }}</td>
                                            <td class="text-right" style="border-bottom: 1px solid #000;">(+)
                                                {{ $v }}</td>
                                        </tr>
                                    @endforeach
                                @endif

                                <!-- Discount -->
                                @if (!empty($receipt_details->discount))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="border-bottom: 1px solid #000;">
                                            {!! $receipt_details->discount_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            (-) {{ $receipt_details->discount }}
                                        </td>
                                    </tr>
                                @endif

                                @if (!empty($receipt_details->total_line_discount))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="border-bottom: 1px solid #000;">
                                            {!! $receipt_details->line_discount_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            (-) {{ $receipt_details->total_line_discount }}
                                        </td>
                                    </tr>
                                @endif

                                @if (!empty($receipt_details->additional_expenses))
                                    @foreach ($receipt_details->additional_expenses as $key => $val)
                                        <tr style="border-bottom: 1px solid #000;">
                                            <td style="border-bottom: 1px solid #000;">
                                                {{ $key }}:
                                            </td>
                                            <td class="text-right" style="border-bottom: 1px solid #000;">
                                                (+)
                                                {{ $val }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                @if (!empty($receipt_details->reward_point_label))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="border-bottom: 1px solid #000;">
                                            {!! $receipt_details->reward_point_label !!}
                                        </td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            (-) {{ $receipt_details->reward_point_amount }}
                                        </td>
                                    </tr>
                                @endif

                                @if (!empty($receipt_details->group_tax_details))
                                    @foreach ($receipt_details->group_tax_details as $key => $value)
                                        <tr style="border-bottom: 1px solid #000;">
                                            <td style="border-bottom: 1px solid #000;">{!! $key !!}</td>
                                            <td class="text-right" style="border-bottom: 1px solid #000;">(+)
                                                {{ $value }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    @if (!empty($receipt_details->tax))
                                        <tr style="border-bottom: 1px solid #000;">
                                            <td style="border-bottom: 1px solid #000;">{!! $receipt_details->tax_label !!}</td>
                                            <td class="text-right" style="border-bottom: 1px solid #000;">(+)
                                                {{ $receipt_details->tax }}
                                            </td>
                                        </tr>
                                    @endif
                                @endif

                                @if ($receipt_details->round_off_amount > 0)
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td style="border-bottom: 1px solid #000;">{!! $receipt_details->round_off_label !!}</td>
                                        <td class="text-right" style="border-bottom: 1px solid #000;">
                                            {{ $receipt_details->round_off }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>

                                <!-- Total -->
                                <tr style="border-bottom: 1px solid #000;">
                                    <th
                                        style="background-color: #063970 !important; color: white !important; border: none; padding: 10px; font-size: 18px; text-transform: uppercase; width: auto; white-space: nowrap;">
                                        {!! $receipt_details->total_label !!}
                                    </th>
                                    <td class="text-right"
                                        style="background-color: #063970 !important; color: white !important; border: none; padding: 10px; font-size: 18px; text-transform: uppercase;">
                                        {{ $receipt_details->total }}
                                    </td>
                                </tr>

                                @if (!empty($receipt_details->total_in_words))
                                    <tr style="border-bottom: 1px solid #000;">
                                        <td colspan="2" class="text-right" style="border-bottom: 1px solid #000;">
                                            <small>({{ $receipt_details->total_in_words }})</small>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Invoice Content End -->
                </div>

                <div class=" col-md-12">
                    @if (empty($receipt_details->hide_price) && !empty($receipt_details->tax_summary_label))
                        <!-- tax -->
                        @if (!empty($receipt_details->taxes))
                            <table class="table table-slim table-bordered">
                                <tr>
                                    <th colspan="2" class="text-center">{{ $receipt_details->tax_summary_label }}
                                    </th>
                                </tr>
                                @foreach ($receipt_details->taxes as $key => $val)
                                    <tr>
                                        <td class="text-center"><b>{{ $key }}</b></td>
                                        <td class="text-center">{{ $val }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    @endif
                </div>

                @if (!empty($receipt_details->additional_notes))
                    <div class=""
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 10px; justify-items: start;">
                        <div class="">
                            <br>
                            <p style="margin: 0;">{!! nl2br($receipt_details->additional_notes) !!}</p>
                        </div>
                    </div>
                @endif

                <div class="row ">
                    @if (!empty($receipt_details->footer_text))
                        <div class=""
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 10px; justify-items: start;">
                            <p style="margin: 0;">
                                {!! $receipt_details->footer_text !!}
                            </p>
                        </div>
                    @endif

                    @if ($receipt_details->show_barcode || $receipt_details->show_qr_code)
                        <div class="@if (!empty($receipt_details->footer_text)) col-xs-4 @else col-xs-12 @endif text-center">
                            {{-- Barcode --}}
                            @if ($receipt_details->show_barcode)
                                <img class="center-block"
                                    src="data:image/png;base64,{{ DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2, 30, [39, 48, 54], true) }}">
                            @endif

                            @if ($receipt_details->show_qr_code && !empty($receipt_details->qr_code_text))
                                <img class="center-block mt-5"
                                    src="data:image/png;base64,{{ DNS2D::getBarcodePNG($receipt_details->qr_code_text, 'QRCODE', 3, 3, [39, 48, 54]) }}">
                            @endif
                        </div>
                    @endif
                </div>
				<!-- footer -->
				<div class="row invoice-info" style="border-top: 1px solid black; margin: 20px 10px 10px; padding-top: 20px; page-break-inside: avoid !important ">
					{{-- <div class="col-md-4 invoice-col">
						<table>
							<thead>
								<tr>
									<td>
										<p style="font-size: 16px; color: #063970 !important; font-weight: bold;">Questions?</p>
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span>Email us:</span>
									</td>
									<td style="text-align: right;">
										<span >spares@plenser.com</span>
									</td>
								</tr>
								<tr>
									<td>
										<span>Call us:</span>
									</td>
									<td style="text-align: right;">
										<span >+254790641866</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div> --}}
					<div class="col-md-4 invoice-col">
						<table>
							<thead>
								<tr>
									<td>
										<p style="font-size: 16px; color: #063970 !important; font-weight: bold;">Payment Info</p>
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span>Account</span>
									</td>
									<td style="text-align: right;">
										<span>:254254</span>
									</td>
								</tr>
								<tr>
									<td>
										<span>Paybill Number</span>
									</td>
									<td style="text-align: right;">
										<span>094875</span>
									</td>
								</tr>
								<tr>
									<td>
										<span>A/C Name</span>
									</td>
									<td style="text-align: right;">
										<span>Plenser Spares</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg invoice-col" style="padding-left: 20%;">
						<table>
							<thead>
								<tr>
									<td>
										<p style="font-size: 16px; color: #063970 !important; font-weight: bold;">Terms & Conditions/Note</p>
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<p>- Cheques are subject to 3 DAYS VALIDATION period upon deposit to facilitate goods dispatch</br>
                                            - Quotations VALID for 10 DAYS ONLY , subject to stock availability</br>
                                            - Goods once sold are NOT returnable</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<table>
						<tbody>
							<tr>
								<td>
									<img width="740px;" src="/img/brands.jpg" alt="brands">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
            </td>
        </tr>
    </tbody>
</table>
