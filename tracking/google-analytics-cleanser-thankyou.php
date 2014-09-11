<!-- Google Analytics Tracking Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16861461-1']);
  _gaq.push(['_trackPageview']);

<?php if (isset($invoice_id) && !empty($invoice_id)) { ?>
    /* E-Commerce - Create an Order */
    _gaq.push(['_addTrans',
        '<?=$invoice_id?>',   // order ID - required
        'RCleanse',                     // affiliation or store name
        '<?=$order_amount?>',    // total - required
        '',                             // tax
        '',                             // shipping
        '<?=$city?>',      // city
        '<?=$state?>',     // state or province
        'US'                           // country
    ]);

    /* E-Commerce - Add an Item to the Order */
    _gaq.push(['_addItem',
        '<?=$invoice_id?>',   // order ID - required
        'cleanseR',                     // SKU/code - required
        'cleanseR',                     // product name
        'Nutritional Supplements',      // category or variation
        '<?=ACTUAL_AMOUNT?>',           // unit price - required
        '1'                             // quantity - required
    ]);

    /* E-Commerce - Optionally Add Upsell Items to the Order */
    <?php 
        // uDigest
        if ($upsell_1 > 0) {
    ?>            
        _gaq.push(['_addItem',
            '<?=$invoice_id?>',   // order ID - required
            'udigest',                      // SKU/code - required
            'uDigest',                      // product name
            'Nutritional Supplements',      // category or variation
            '<?=UPSELL_PRODUCT_AMOUNT_1?>',                         // unit price - required
            '1'                             // quantity - required
        ]);
    <?php
        }
        
        // ProB
        if ($upsell_2 > 0) {
    ?>            
        _gaq.push(['_addItem',
            '<?=$invoice_id?>',           // order ID - required
            'prob',                      // SKU/code - required
            'ProB',                      // product name
            'Nutritional Supplements',      // category or variation
            '<?=UPSELL_PRODUCT_AMOUNT_2?>',                         // unit price - required
            '1'                             // quantity - required
    <?php
        }
    ?>
    
    /* E-Commerce - Submit Transaction to the Analytics Servers */
    _gaq.push(['_trackTrans']);    
<?php } ?>

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

