@extends('template')
@include('menubar')

@section('content')
@yield('menubar')

	<h1 class="page-header">
	    Perpustakaan
	    <!--small>Secondary Text</small-->
	    <button id="btn-tambah-buku" class="btn btn-primary pull-right visible-sm visible-md visible-lg">Tambah Perpustakaan <span class="glyphicon glyphicon-plus"></span></button>
	</h1>


	<div class="table-responsive">
	    <table data-toggle="table" data-url="" data-cache="false" data-height="299" class="table table-hover">
	        <thead>
	            <tr>
	                <th data-field="no">No.</th>
	                <th data-field="nama">Nama</th>
	                <th data-field="alamat">Alamat</th>
	                <th data-field="contact">Kontak</th>
	                <th data-field="url">URL</th>
	                <th data-field="secret">Secret Code</th>
	                <th data-field="aksi">Aksi</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php $x = 0 ?>
	        	@foreach($perpus as $p)
	        		<tr>
	        			<td>{{++$x}}</td>
	        			<td>{{$p->nama}}</td>
	        			<td>{{$p->alamat}}</td>
	        			<td>{{$p->telepon}}<br/>{{$p->email}}</td>
	        			<td><a href="{{$p->url}}">Kunjungi</a></td>
	        			<td>{{$p->secretCode}}</td>
	        			<td>
		        			<a href="#" class="btn btn-primary">Hapus</a>
		        			<a href="#" data-perpusid="{{ $p->id }}" class="genconf btn btn-primary">Buat Config</a>
		        		</td>
	        		</tr>
	        	@endforeach
	        </tbody>
	    </table>
	</div>

	<div id='html_insert' style="display:none">
	    {{ Form::open() }}
	        <fieldset>
	        	<div class="control-group">
	        	    <label for="inputKategori">Nama Perpustakaan</label>
	        	    <div class="controls">
	        	        <input type="text" name="namaperpus" id="namaperpus" class="form-control" />
	        	    </div>
	        	</div>

	            <div class="control-group">
	                <label for="inputKategori">Letak Kota Perpustakaan</label>
	                <div class="controls" id="input-adv-search">
	                    <input type="hidden" name="idpropinsi" id="idpropinsi" />
	                    <input type="hidden" name="idkota" id="idkota" readonly />
	                    <input type="text" id="search_propinsi" placeholder="Cari Propinsi" class="form-control" autocomplete="off"  />
	                    <input type="text" id="search_kota" placeholder="Cari Kota" class="form-control" autocomplete="off" disabled="disabled" />
	                </div>
	            </div>
	            <div class="control-group">
	                <label for="inputKategori">Alamat Lengkap</label>
	                <div class="controls">
	                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
	                </div>
	            </div>
	            <div class="control-group">
	                <label for="inputKategori">Telepon</label>
	                <div class="controls">
	                    <input type="text" name="telepon" id="telepon" class="form-control" />
	                </div>
	            </div>
	            <div class="control-group">
	                <label for="inputKategori">Email</label>
	                <div class="controls">
	                    <input type="email" name="email" id="email" class="form-control" />
	                </div>
	            </div>
	            <div class="control-group">
	                <label for="inputKategori">URL</label>
	                <div class="controls">
	                    <input type="text" name="url" id="url" class="form-control" />
	                </div>
	            </div>


	            <div class="control-group">
	                <label class="control-label" for="confirmcari"></label>
	                <div class="controls">
	                    <input type="button" id="submitform" class="btn btn-default" value="Tambah Perpustakaan" />
	                </div>
	            </div>
	        </fieldset>
	    </form>
	</div>
	<div id='html_config' style="display:none">
	    {{ Form::open() }}
	        <fieldset>
	        	<div class="control-group">
	        	    <label for="inputKategori">Hostname</label>
	        	    <div class="controls">
	        	   	 <input type="hidden" name="perpusid" id="perpusid" class="form-control" />

	        	        <input type="text" name="dbhost" id="dbhost" class="form-control" />
	        	    </div>
	        	</div>
				<div class="control-group">
				    <label for="inputKategori">DB Name</label>
				    <div class="controls">
				        <input type="text" name="dbname" id="dbname" class="form-control" />
				    </div>
				</div>
				<div class="control-group">
				    <label for="inputKategori">DB User</label>
				    <div class="controls">
				        <input type="text" name="dbuser" id="dbuser" class="form-control" />
				    </div>
				</div>
				<div class="control-group">
				    <label for="inputKategori">DB password</label>
				    <div class="controls">
				        <input type="text" name="dbpass" id="dbpass" class="form-control" />
				    </div>
				</div>
	            <div class="control-group">
	                <label class="control-label" for="confirmcari"></label>
	                <div class="controls">
	                    <input type="button" id="submitinfoconfig" class="btn btn-default" value="Generate Config" />
	                </div>
	            </div>
	        </fieldset>
	    </form>
	</div>
@append

<script>
@section('additional_javascript')

function reapply(){
	var input = $('#search_propinsi');

	var g = '{{ URL::to("province_list") }}';
	$.get(g, function(data){
		input.typeahead({ source:data,autoSelect: true });
	},'json');

	input.change(function() {
	    var current = input.typeahead("getActive");
	    if (current) {
	        if (current.name == input.val()) {
	            $('#idpropinsi').val(current.id);
	            x();
	        } else {
	            $('#idpropinsi').val('');
	        }
	    } else {
	        $('#idpropinsi').val('');
	    }
	});


	function x(){
		var input2=$('#search_kota');
		if($('#idpropinsi').val() != ''){
			console.log('a');
			input2.prop('disabled', false);
		} else {
			input2.disabled = true;
		}
		var g = '{{ URL::to("city_list") }}' + '/' + $('#idpropinsi').val();
		$.get(g, function(data){
			input2.typeahead({ source:data,autoSelect: true });
		},'json');
		input2.change(function() {
		    var current = input2.typeahead("getActive");
		    if (current) {
		        if (current.name == input2.val()) {
		            $('#idkota').val(current.id);
		        } else {
		            $('#idkota').val('');
		        }
		    } else {
		        $('#idkota').val('');
		    }
		});

	};


    $('#submitform').on('click', function(){
    	console.log('a');
        $.post('{{ URL::to("perpustakaan/create") }}', 
            {
                'namaperpus': $('#namaperpus').val(),
                'idkota': $('#idkota').val(),
                'alamat': $('#alamat').val(),
                'telepon': $('#telepon').val(),
                'email': $('#email').val(),
                'url': $('#url').val(),
            })
            .done(function(data){
            	console.log(data);
                if(data.status == "OK"){
                    alertify.success(data.message);
                } else {
                    alertify.error(data.message);
                }
            });   
    });
}
function reapply2(){

    $('#submitinfoconfig').on('click', function(){
    	console.log('a');
    	$.post("{{ URL::to('exportconfig') }}", {
    		'perpusid' : $('#perpusid').val(),
    		'dbhost' : $('#dbhost').val(),
    		'dbname' : $('#dbname').val(),
    		'dbuser' : $('#dbuser').val(),
    		'dbpass' : $('#dbpass').val()
    	}) .done(function(data){
    		alertify.alert('Generate Config', '<textarea style="height:100%" class="form-control">'+data+'</textarea>').set('resizable',true).resizeTo(600,500);
    	});
    });
}
$('#btn-tambah-buku').on('click', function(){
    $('.ajs-content').empty();
    var form = $('div#html_insert').html();
    $('div#html_insert').html('');
    alertify.alert( 'Tambah Perpustakaan', '', function(){
        var form = $('.ajs-content').html();
        $('div#html_insert').html(form);
    }).set('resizable',true).resizeTo(600,500);
    $('.ajs-content').append($.parseHTML(form));
    reapply();
});

$('.genconf').on('click', function(){

	 $('.ajs-content').empty();
	 var form = $('div#html_config').html();
	 $('div#html_config').html('');
	 alertify.alert( 'Tambah Perpustakaan', '', function(){
	     var form = $('.ajs-content').html();
	     $('div#html_config').html(form);
	 }).set('resizable',true).resizeTo(600,500);
	 $('.ajs-content').append($.parseHTML(form));
	 $('#perpusid').val($(this).data('perpusid'));
	 reapply2();
});
@append
</script>