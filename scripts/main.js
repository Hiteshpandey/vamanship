
		$('#checkout').on('click',function(e){
			let url = $('#check').val();
			if (url == "") {
				// e.preventDefault();
				alert("please enter a proper Path of a Folder");
				return false;
			}
		});

		function showtree(){
			let token = $("meta[name='csrf_token']").attr('content');
			let anchor = $("#lists").val();
			$.ajax({
			        type: "POST",
			        url: "vamaship/showtree.php",
			        content_type: "application/json",
			        data: "csrf_token="+token+"&anchor="+anchor,
			        success: function(response) {
			        	response = JSON.parse(response);
			        	if (typeof response.message == "undefined") {
			             let data = response;
			             eachRecursive(data,toarray);
			             console.log(toarray);
			             let element = $("#getTree");
			             arraytotree(toarray,element,0);
			             $(".show").after("<p class='error'>Your token has expired please reload for next operation.<p>");
			             colorc($('.reload'));

			             }
			             else
			             {
			             	alert("Error: "+response.message);
			             }

			        },
			        error: function(response) {
			            console.log(response);
			        }
			});
		}

		let toarray = Array();

        // This function converts the json into simpler form
		function eachRecursive(obj,arr)
		{
		    for (let k in obj)
		    {
		        if (typeof obj[k] == "object" && obj[k] !== null){
		        	// console.log("key: "+k);
		        	// console.log("parent: "+obj['parent']);
		        	arr.push({
			            folder: k, 
			            parent: obj['parent'],
			            depth: obj['depth']
			        });
		            eachRecursive(obj[k],arr);
		        }
		        else
		        {
		        	
		        }
		    }
		}

		function arraytotree(darray,element,it){
			for (let key in darray){
				if (element.is(':empty')) {
					element.append("<p style='margin-left:"+darray[it].depth+"00px;' pid='1'>"+darray[it].folder+"</p>");
					it++;
				}
				else
				{
					element.append("<p style='margin-left:"+darray[it].depth+"00px;' pid='1'>"+darray[it].folder+"</p>");
					it++;
				}
			}
		}


		function colorc(element){
			setInterval(function() {
            element.toggleClass("cls");
        }, 350);
		}
