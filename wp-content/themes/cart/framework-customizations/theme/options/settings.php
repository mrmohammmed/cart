<?php

$options = array(


	
		'accounts' => array(
	    'type' => 'tab',
	    'options' => array(
		

			'social' => array(
			    'type' => 'box',
			    'options' => array(
					'infoImg'    =>  array('type' => 'upload', 'images_only' => true, 'label' => 'اللوجو'),
					'mobileImg'    =>  array('type' => 'upload', 'images_only' => true, 'label' => 'mobile-logo')
				
             

			    ),
			    'title' => __('لوغو الموقع', '{domain}'),
			),
	    ),

        
	    'title' => __('لوغو الموقع', '{domain}'),
	),




	'account3' => array(
	    'type' => 'tab',
	    'options' => array(
		

			'phones' => array(
			    'type' => 'box',
			    'options' => array(
			     
					'facebook'  => array( 'type' => 'text','label'=>'facebook'),
					'instagram'  => array( 'type' => 'text','label'=>'instagram'),
					'twitter'  => array( 'type' => 'text','label'=>'twitter'),
					'whatsapp'  => array( 'type' => 'text','label'=>'whatsapp')
		
		
					
			       
             

			    ),
			    'title' => __('information', '{domain}'),
			),
	    ),

        
	    'title' => __('information', '{domain}'),
	),


	'account4' => array(
	    'type' => 'tab',
	    'options' => array(
		

			'phones' => array(
			    'type' => 'box',
			    'options' => array(
			     
					'title'  => array( 'type' => 'text','label'=>'title'),
					'content'  => array( 'type' => 'textarea','label'=>'content')
				
		
		
					
			       
             

			    ),
			    'title' => __('start', '{domain}'),
			),
	    ),

        
	    'title' => __('start', '{domain}'),
	)


	




    
    

 //    'Social' => array(
 //        'type' => 'tab',
 //        'options' => array(
 //            'social Icons' => array(
 //                'type'  => 'addable-box',
 //                'label' => __('ايكونات التواصل الأجتماعي', '{domain}'),
 //                'box-options' => array(
 //                    'socialName' => array( 'type' => 'text','label'=>'اسم الموقع' ),
 //                    'socialLink' => array( 'type' => 'text','label'=>'الرابط' ),
 //                    'socialIcon' => array( 'type' => 'icon-v2','label'=>'الأيقونه' ),
 //                ),
 //                'template' => '{{- socialName }}', // box title
 //                'box-controls' => array( // buttons next to (x) remove box button
 //                    'control-id' => '<small class="dashicons dashicons-smiley"></small>',
 //                ),
 //                'limit' => 0, // limit the number of boxes that can be added
 //                'add-button-text' => __('اضف جديد', '{domain}'),
 //                'sortable' => true,
 //            )

 //        ),
 //        'title' => __('ايكونات التواصل الأجتماعي', '{domain}'),
 //    ),


    
    

 //    'Footer' => array(
	//     'type' => 'tab',
	//     'options' => array(

	//     ),

	//     'title' => __('الفوتر', '{domain}'),
	// ),




);
