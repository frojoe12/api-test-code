<?php

$salesOrders = [
    [
        'orderNo'=>'Woo12222',
        'warehouse'=>'W1',
        'orders'=>[
            ['product_code'=>'C&C'],
            ['product_code'=>'C&C']
        ]
    ],
    [
        'orderNo'=>'Woo12223',
        'warehouse'=>'W1',
        'orders'=>[
            ['product_code'=>'CUPA'],
            ['product_code'=>'C&C']
        ]
    ],
    [
        'orderNo'=>'Woo12224',
        'warehouse'=>'W1',
        'orders'=>[
            ['product_code'=>'AMC'],
            ['product_code'=>'AME']
        ]
    ],
    [
        'orderNo'=>'Woo12225',
        'warehouse'=>'W1',
        'orders'=>[
            ['product_code'=>'C&C'],
            ['product_code'=>'CUPR']
        ]
    ],
    [
        'orderNo'=>'Woo12225',
        'warehouse'=>'W1',
        'orders'=>[
            ['product_code'=>'C&C'],
            ['product_code'=>'AMB']
        ]
    ],
    [
        'orderNo'=>'Woo12226',
        'warehouse'=>'W1',
        'orders'=>[
            ['product_code'=>'CUPR']
        ]
    ]
];
$warehouse_perran=['C&C','CUPA'];
$warehouse_swindon=['AMB','AMC','AME'];
$warehouse_etching=['CUPR','CUPQ'];



foreach ($salesOrders as $salesOrder) {
    $perran=0;
    $swindon=0;
    $etching=0;
    echo $salesOrder['orderNo'];
    echo "<br />";
    foreach($salesOrder['orders'] as $order) {
        if (in_array($order['product_code'],$warehouse_perran)) {
            $perran=1;
        } else if (in_array($order['product_code'],$warehouse_swindon)) {
            $swindon=1;
        } else if (in_array($order['product_code'],$warehouse_etching)) {
            $etching=1;
        }
    }
    if ($perran+$swindon+$etching>1) {
        echo "MIXED";
    } else if ($swindon===1) {
        echo "SWINDON";
    } else if ($etching===1) {
        echo "ETCHING";
    } else {
        echo $salesOrder['warehouse'];
    }
    echo "<br />";
}




?>
