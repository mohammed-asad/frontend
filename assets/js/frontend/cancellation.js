//API call to fetch terms
var policy = {
	//-------------------------------------- Code to load table on page-load ----------------------------------------------------------------------------------------------------

	getPolicy: function () {
		var maxLenght = 100;
		i = 0;
		fns.ajaxGet('holidaymate/api/policy/id/').
		success(function (response) {
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					$.map(response.data, function (item, index) {
						i += 1;
						//Populate Terms list
						var newcancellation = `<p>${item.description}</p>`;
						if (index <= (maxLenght - 1)) {
							$('.cancellation-tab').append(newcancellation);
						}
					})
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			})
	},

	//-------------------------------------- Code to Add new Terms ----------------------------------------------------------------------------------------------------

	addNewPolicy: function () {
		$('.createpolicy').click('on', function () {
			var title = $('.policy_title').val(),
				description = $('.description').val();
			fns.ajaxPost(
					'holidaymate/api/policy/new',
					'POST', {
						"title": title,
						"description": description
					}
				)
				.done(function (response) {
					console.log(response);
				})
				.always(function (res) {
					console.log(res.response);
				})
		})
	},

	//-------------------------------------- Code to Edit table data ----------------------------------------------------------------------------------------------------
	EditPolicy: function (u) {

		var maxLenght = 100;
		var id = u;
		var reg = "";
		//alert(url);//I am getting url here but in success its not working...
		fns.ajaxGet('holidaymate/api/policy/id/' + u).done(function (response) {
				// alert(response.status)
				if (response.status === 401) {
					alert(response.message)
				} else if (response.status === 200) {
					var i = 0;
					$.map(response.data, function (item, index) {

						r = `"<div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Update Form</h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                  <label class="control-label">Region Name</label>
                  <input type="text" name="md_title" id="md_title" class="form-control form-control-sm md_title" value="${item.title}"/>
                  <input type="hidden" name="md_id" id="md_id" class="form-control form-control-sm md_id" value="${item.id}"/>
                </div>

                
              <div class="form-group">
                <label class="control-label">Description</label>
                <textarea type="text" name="description" class="description form-control form-control-sm">${item.description}</textarea>
              </div>

               
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary update">Save changes</button>
              </div>
          </div>
      </div>"`;
						if (index <= (maxLenght - 1)) {
							// $('.region tr').remove();

							$('#myModal').html(r);
							$(document).ready(function () {

								$("#myModal").modal('show');
								// $("#myModal").find('.md_stat').val(item.status);
							});
						}
					}) //end of map loop
				}
			})
			.fail(function (response) {
				alert("API failed, check Token");
			});


	},
	//-------------------------------------- Code to update table ----------------------------------------------------------------------------------------------------
	updatePolicy: function () {
		$(document).ready(function () {

			// code to read selected table row cell data (values).
			$("#myModal").on('click', '.update', function () {
				var uid = $.trim($(".md_id").val()); // get current row 1st TD value
				var title = $.trim($(".md_title").val()); // get current row 2nd TD
				var desc = $.trim($(".description").val()); // get current row 3rd TD
				fns.ajaxPost(
						'holidaymate/api/policy/update/' + uid,
						'PUT', {
							"title": title,
							"description": desc
						}
					)
					.done(function (response) {
						console.log(response);
						alert(response.message);

					})
					.always(function (res) {
						console.log(res.response);
						window.location.reload();
					})
			});
		});

	},
	//------------------- delete terms and condition
	removePolicy: function () {
		$(document).ready(function () {
			$(".tbcrud").on('click', '.Delete', function () {
				// get the current row
				var currentRow = $(this).closest("tr");

				var uid = $.trim(currentRow.find(".tbid").val());

				fns.ajaxPost(
						'holidaymate/api/policy/remove/' + uid,
						'DELETE', {
							"id": uid

						}
					)
					.done(function (response) {
						console.log(response);
						alert(response.message);

					})
					.always(function (res) {
						console.log(res.message);
						window.location.reload();
					})
			});
		});
	}




};
policy.getPolicy();
policy.addNewPolicy();
policy.updatePolicy();
policy.removePolicy();
