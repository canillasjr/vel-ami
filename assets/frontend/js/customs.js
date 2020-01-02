jQuery(document).ready(function(){
	jQuery('#create_admin_account').validate({
		rules : {
			firstname: {
				required : true
			},
			lastname: {
				required : true
			},
			email: {
				required : true
			},
			username: {
				required : true
			},
			password: {
				required : true,
			}
		}
	});

	jQuery('#update_admin_account').validate({
		rules : {
			firstname: {
				required : true
			},
			lastname: {
				required : true
			},
			email: {
				required : true
			},
			username: {
				required : true
			}
		}
	});

	jQuery('#create_category').validate({
		rules : {
			category: {
				required : true
			},
			
		}
	});

	jQuery('#create_location').validate({
		rules : {
			location: {
				required : true
			},
			
		}
	});

	// admin-accounts

	jQuery(document).on('click','#edit-admin-account',function(){
		$this = jQuery(this);

		var firstname = $this.attr('data-firstname');
		var lastname = $this.attr('data-lastname');
		var email = $this.attr('data-email');
		var username = $this.attr('data-username');
		var account_id = $this.attr('data-id');
		
		$form = jQuery(document).find('#editaccount');
		$form.find('input.firstname').val(firstname);
		$form.find('input.lastname').val(lastname);
		$form.find('input.email').val(email);
		$form.find('input.username').val(username);
		$form.find('input.account_id').val(account_id);
	});

	jQuery(document).on('click','#delete-admin-account',function(){
		$this = jQuery(this);

		var account_id = $this.attr('data-id');
		
		$form = jQuery(document).find('#deleteaccount');
		$form.find('input.account_id').val(account_id);
	});

	jQuery(document).on('click','#edit-category',function(){
		$this = jQuery(this);

		var id = $this.attr('data-id');
		var category = $this.attr('data-category');
		var icon = $this.attr('data-icon');

		
		$form = jQuery(document).find('#update_category');
		$form.find('input.icon').val(icon);
		$form.find('input.category').val(category);
		$form.find('input.category_id').val(id);
	});
	
	jQuery(document).on('click','#delete-category',function(){
		$this = jQuery(this);

		var account_id = $this.attr('data-id');
		
		$form = jQuery(document).find('#delete_category');
		$form.find('input.category_id').val(account_id);
	});

	jQuery(document).on('click','#edit-location',function(){
		$this = jQuery(this);

		var id = $this.attr('data-id');
		var location = $this.attr('data-location');

		$form = jQuery(document).find('#update_location');
		$form.find('input.location_id').val(id);
		$form.find('input.location').val(location);
	});

	jQuery(document).on('click','#delete-location',function(){
		$this = jQuery(this);

		var location_id = $this.attr('data-id');
		
		$form = jQuery(document).find('#delete_location');
		$form.find('input.location_id').val(location_id);
	});

	jQuery('#register_user').validate({
		rules:{
			 confirm_password:{
                equalTo:"[name='password']"
            }
		}
	});
	jQuery('#login_user').validate({
		rules:{
			 email:{
                required:true
            },
             password:{
                required:true
            }
		}
	});

	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#profile-img").change(function(){
        readURL(this);
    });

    jQuery('#create_shop').validate({
    	rules: {
    		shopname : {
    			required : true
    		}
    	}
    });

    // Add product
    jQuery('#add_product_form').validate({
        rules:{
            category:{
                required: true
            },
            location:{
                required: true
            },
            product_name:{
                required: true
            },
            price:{
                required: true,
                 digits: true
            },
            description:{
                required: true
            },
            tags:{
                required: true
            }
        }
       
    });
})