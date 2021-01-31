<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        $result = [];

        if(count($nums) < 2) {
            return $result;
        }
        
        if(count($nums) === 2) {
            if(($nums[0] + $nums[1]) == $target) {
                return [0, 1];
            } else {
                return $result;
            }
        }

        $storage = [];
        foreach($nums as $numberIndex => $number) {
            if(!array_key_exists($number, $storage)) {
                if(($number >= 0 && $target >= 0) || ($number >= 0 && $target < 0) || ($number < 0 && $target >= 0) || ($number < 0 && $target < 0)) {
                    $neededFind = $target - $number;
                } else {
                    $neededFind = $target + $number;
                }
                $storage[$neededFind] = $numberIndex;
            } else {
                return [$storage[$number], $numberIndex];
            }  
        }

        return $result;

    }
    
}

$input = [9185270,-9977634,5152130,-7569234,2078434,3082495,6630551,-5476859,-3746865,-3892704,1314811,7619357,-9039179,-6152661,6718089,-2160315,7257890,9998875,-8418017,6772238,1487058,-4208671,7610442,-3644241,-4687679,-5264841,2238501,2263653,-2994599,-7558681,8861551,-1567796,443072,-7669938,-2559029,3670014,-8390519,-523343,3776620,-8505117,6172189,-6364875,-1846766,3822129,-3259582,7545828,837103,-6187186,6997658,-1331194,-5064789,1869867,-8844455,3257616,-7393237,3166721,-6228727,4927408,2617702,4478877,-144697,9045981,8987755,-892588,-1442130,9590416,-1799681,8790644,4362169,8309913,1596232,3628118,-3804169,1353228,1842292,9146961,5746009,6578231,-7447924,1657044,-5198384,2811812,-6711089,-1012526,-6987160,131697,2366105,3881988,-8627952,-5160644,-8445966,4336763,6695562,6741860,5357542,-8124284,-2873154,-9957607,-8884846,-9303786,-8171897,-636998,-4973823,1279033,9723692,-6368166,-3637946,7463847,-4645125,-698264,-8193632,6135662,-4544220,-9591663,-600766,-577348,7330344,-9714552,5536224,-2851882,5704175,-756169,2719401,-2992396,3765068,4537680,3443768,-9483867,1858876,-1519539,9926533,-9924357,-1618275,-2954683,2868016,-5352284,3134992,-91870,2988211,7323876,5189317,8483529,5948165,-2911942,9213825,4263826,532028,-6303715,3331786,-7474568,-2873578,-5453395,6224467,5286911,9096177,1536774,5671729,2414370,-7131712,-6731806,5149960,-5796830,-9899967,9862545,8634798,1684310,-7467443,-5432597,-7498172,-3221479,-8199949,6537672,-7691843,8640753,-4904660,-8685966,6408803,-8160640,-4334918,5694830,4776934,1826088,-419793,5344924,-225022,4082002,4446774,1904363,-6397862,-9848116,8571831,-4904486,-5788610,-1483349,-9919283,6184790,3417925,-5566165,-321929,-4278746,7638557,4322627,937570,3725983,9582565,6942749,-6529452,-4518365,7090687,-5278865,-5570982,4629189,-6099768,-1515998,-6393208,-4108362,2173961,-2085440,3081812,1957678,-3199594,-6245381,4108858,-1421558,-5074177,7032248,3273828,8459933,-9492023,9829062,3922624,-7347466,222660,-5381542,5076113,-2884088,-9529088,-4570268,-2897922,-8631933,-3337612,6558714,3888526,-7600461,-881393,-664584,6308886,9221591,4768826,3302160,-4513273,6300424,6510301,-9097554,2946707,-5956777,8207766,-8301624,-6591343,9587789,7137988,4584479,6455702,1598209,3914054,1678074,-3895655,4897138,880038,-5502566,73302,2475696,1918456,8781699,-5496610,119305,-6232101,-6687541,-5920141,-1116831,3702639,3068934,1295952,-7617782,3840486,7643899,3771626,-7789930,-9409578,-5154426,-4314845,-7427825,6927419,7629805,-2868769,4243377,6125915,3952505,8406362,-939164,2853927,1172051,6152100,3760754,-6557160,711024,4605203,3422087,920093,5958387,1851674,-1886051,8841261,-778226,6143054,7282514,4144159,-6290383,6900152,4338429,9092542,8060086,3390578,-8385598,-1534889,-6936387,-2633916,4001726,-6701244,6836306,-4705910,-9891979,-5370551,5531596,2564561,6440014,9389720,4372766,-7298464,4579285,913853,2595655,-9367572,4013627,2909509,2377944,-6179770,-9237529,-823197,1074129,-2278161,5800691,8660211,-9680583,-9003,-5966621,-2082966,4728930,4205730,-3809799,-5576679,6627567,-9084709,-7223637,-567664,7090546,-4767440,-5259093,-8058155,-3620329,-1656982,-6259343,7797296,-5235090,6610610,-1012502,-7044264,-6992584,6101534,9316125,-4702005,927074,-965607,-587528,4966186,-4370570,-4239347,-4686493,7425391,-7481016,9029073,-602251,3321337,-9109241,-8823327,9838013,7462209,19269,9679940,5446805,8643608,-7830112,-9531898,5254890,1267020,-3033281,-5215960,486303,261691,7564278,-9796417,-814270,5507509,2032779,469506,8068918,4574024,551690,-8476346,1806070,7219726,-930462,-3571856,5822303,-4142426,-9392627,-5381505,6660443,-7265204,5307390,-6779937,-2912255,-1300011,-9357117,-170887,-5124014,977389,1083273,-5845955,-6912698,-9859872,-9860379,7238270,7099068,-2973551,-8815326,-208756,5778726,-1915208,-1665950,8795990,2550694,-7044640,-2969447,5073899,-3309458,755189,-8121875,7608218,541826,6980825,5398271,-2145762,-8794224,-9376882,643075,3081600,9209601,9400150,-9933962,5064096,1017028,-7054925,-8849231,-9964637,-7847297,2943512,-1463810,2818543,-7232078,1921781,-1229629,-6901765,625922,-3574255,5260447,-9043325,2366650,1737069,-4431365,9858777,7026640,-4923328,-7791792,-9740018,2350707,224803,1414431,3241584,3527166,5454021,-5236750,6144196,7739512,1128373,-473034,-7900034,-8165412,-751734,3967243];

$result = (new Solution())->twoSum($input, -792364);


var_dump($result);