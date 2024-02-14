document.addEventListener('DOMContentLoaded', () => {
	var open_modal_btn=document.querySelectorAll(".open-modal-btn");
	var change_ground,big_change_ground,modal_exit_btn,modal_bg,change_content_btn,modal;

	function close_modal(modal){
		modal.classList.remove("show");
		document.querySelector("body").style="";
		change_content_btn.forEach(btn=>{
			btn.removeEventListener('click', set_content_event);
		});
		modal_bg.removeEventListener('click', close_modal_event);
		modal_exit_btn.removeEventListener('click', close_modal_event);
	}
	function open_modal(modal){
		modal.classList.add("show");
		document.querySelector("body").style="overflow:hidden";
	}
	function get_modal(btn){
		var modal_array={
			'add-quotation-btn':'.add-quotation-modal',
			'edit-element-btn':'.edit-element-modal',
			'edit-partner-btn':'.edit-partner-modal',
			'create-archive-btn':'.create-archive-modal',
			'registration-select-modal-btn':'.registration-select-modal',
		};
		var res;
		btn.classList.forEach(btn_class=>{
			if (modal_array.hasOwnProperty(btn_class)){
				res=document.querySelector(modal_array[btn_class]);
			}
		});
		return res;
	}
	function set_content(btn){
		array_of_element={
			"file":'<input type="file" name="icon_file" class="form-control" id="inputIconFile">',
			"link":'<input type="text" name="link" class="form-control" id="nameOfElement" placeholder="Трансляция">',
			"content":'<div class="archive-card row mb-4 d-flex flex-md-row flex-column-reverse"><div class="col-md-6 col-12 archive-info mt-md-0 mt-3"><p>Промежуточные итоги реализации Федерального проекта «Успех каждого ребенка» национального проекта «Образование» в Архангельской области</p><div class="archive-btn"><a href="#" class="btn btn-primary">Перейти</a></div></div><div class="col-md-6 col-12 archive-video"><iframe src="https://vk.com/video_ext.php?oid=-186119133&id=456239196&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe></div></div><div class="archive-card row d-flex flex-md-row flex-column-reverse"><div class="col-md-6 col-12 archive-info mt-md-0 mt-3"><p>Промежуточные итоги реализации Федерального проекта «Успех каждого ребенка» национального проекта «Образование» в Архангельской области</p><div class="archive-btn"><a href="#" class="btn btn-primary">Перейти</a></div></div><div class="col-md-6 col-12 archive-video"><iframe src="https://vk.com/video_ext.php?oid=-186119133&id=456239196&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe></div></div>'
		};
		if(btn.value=="content"){
			big_change_ground.innerHTML=array_of_element[btn.value];
			change_ground.innerHTML="";
		}
		else{
			change_ground.innerHTML=array_of_element[btn.value];
			big_change_ground.innerHTML="";
		}
	}
	function set_content_event(event){
		set_content(event.target);
	}
	function close_modal_event(event) {
		close_modal(modal)
	}
	open_modal_btn.forEach(element=>{
		element.addEventListener('click', ()=>{
			modal=get_modal(element);
			open_modal(modal);
			modal_exit_btn=modal.querySelector(".modal-exit-btn");
			modal_bg=modal.querySelector(".modal-bg");
			change_content_btn=modal.querySelectorAll(".change-content-btn");
			change_ground=modal.querySelector(".change-ground");
			big_change_ground=modal.querySelector(".big-change-ground");
			change_content_btn.forEach(btn=>{
				if(btn.hasAttribute("checked")){
					set_content(btn);
				}
				btn.addEventListener('click', set_content_event);
			});
			modal_bg.addEventListener('mouseover',()=>{
				modal_bg.addEventListener('click', close_modal_event);
			});
			modal_exit_btn.addEventListener('click', close_modal_event);
		})
	});
});