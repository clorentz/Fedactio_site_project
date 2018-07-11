require('../css/admin.scss');

// JQuery function allowing to dynamicaly add an item in the regulation page
jQuery(document).ready(function () {
    var $wrapper = $('.js-regulation-items-wrapper');

    $wrapper.on('click', '.js-regulation-items-add', function (e) {
       e.preventDefault();

       // Get the data-prototype explained earlier
       var prototype = $wrapper.data('prototype');
       // get the new index
       var index = $wrapper.data('index');
       // Replace '__name__' in the prototype's HTML to
       // instead be a number based on how many items we have
       var newForm = prototype.replace(/__name__/g, index);
       // increase the index with one for the next item
       $wrapper.data('index', index + 1);
       newForm = '<div class=" row js-regulation-items-item"><div class="col-md-11">'+newForm+'</div><div class="col-md-1"><a href="" class="js-remove-regulation-item"> <i class="far fa-trash-alt"></i></a></div></div>';
       // Display the form in the page before the "new" link
       $(this).before(newForm);
    });
});

// JQuery function allowing to dynamicaly delete an item in the regulation page
jQuery(document).ready(function() {
     var $wrapper = $('.js-regulation-items-wrapper');
     $wrapper.on('click', '.js-remove-regulation-item', function(e) {
         e.preventDefault();
         $(this).closest('.js-regulation-items-item')
             .fadeOut()
             .remove();
     });
});

// JQuery function allowing to dynamicaly add an item in the informations page
jQuery(document).ready(function() {
    var $wrapper = $('.js-informations-items-wrapper');

    $wrapper.on('click', '.js-informations-items-add', function(e) {
       e.preventDefault();

       // Get the data-prototype explained earlier
       var prototype = $wrapper.data('prototype');
       // get the new index
       var index = $wrapper.data('index');
       // Replace '__name__' in the prototype's HTML to
       // instead be a number based on how many items we have
       var newForm = prototype.replace(/__name__/g, index);
       // increase the index with one for the next item
       $wrapper.data('index', index + 1);
       newForm = '<div class=" row js-informations-items-item"> <div class="col-md-11">' + newForm + '</div> <div class="col-md-1"> <a href="" class="js-remove-informations-item"> <i class="far fa-trash-alt"></i></a></div></div>';
       // Display the form in the page before the "new" link
       $(this).before(newForm);
    });
});

// JQuery function allowing to dynamicaly delete an item in the informations page
jQuery(document).ready(function() {
     var $wrapper = $('.js-informations-items-wrapper');
     $wrapper.on('click', '.js-remove-informations-item', function(e) {
         e.preventDefault();
         $(this).closest('.js-informations-items-item')
             .fadeOut()
             .remove();
     });
});



// JQuery function allowing to dynamicaly add a question in the training page
jQuery(document).ready(function() {
    var $wrapper = $('.js-training-questions-wrapper');

    $wrapper.on('click', '.js-training-questions-item-add', function(e) {
       e.preventDefault();

       // Get the data-prototype explained earlier
       var prototype = $wrapper.data('prototype');
       // get the new index
       var index = $wrapper.data('index');
       // Replace '__name__' in the prototype's HTML to
       // instead be a number based on how many items we have
       var newForm = prototype.replace(/__name__/g, index);
       var add_btn = '  <a href="" class="js-training-answers-item-add"> <span class="fa fa-plus-circle"></span> Add Another Answer to the question </a>';

       //$('#training_quiz_questions_' + index + '_answers').append(add_btn);
       console.log($('fieldset.form-group').find('#training_quiz_questions_' + index +'_answers'));

       newForm = newForm + '<button type="button" class="btn btn-danger js-remove-questions-item">Remove the question</button>';

       index = index + 1;
       var title = '<h4>Question ' + index + '</h4>'
       newForm = '<div class="js-training-questions-item">' + title + newForm; + '</div>';
       // increase the index with one for the next item
       $wrapper.data('index', index);
       // Display the form in the page before the "new" link
       $(this).before(newForm);
    });
});

// JQuery function allowing to dynamicaly delete an question in the training page
jQuery(document).ready(function() {
     var $wrapper = $('.js-training-questions-wrapper');
     $wrapper.on('click', '.js-remove-questions-item', function(e) {
         e.preventDefault();
         $(this).closest('.js-training-questions-item')
             .fadeOut()
             .remove();
     });
});



// JQuery function allowing to dynamicaly add an item in the informations page
jQuery(document).ready(function() {
    var $wrapper = $('.js-training-answers-wrapper');

    $wrapper.on('click', '.js-training-answers-item-add', function(e) {
       e.preventDefault();

       var $wrapper = $(this).closest('.js-training-answers-wrapper');
       // Get the data-prototype explained earlier
       var prototype = $wrapper.data('prototype');
       // get the new index
       var index = $wrapper.data('index');
       // Replace '__name__' in the prototype's HTML to
       // instead be a number based on how many items we have

       var newForm = prototype.replace(/__name__/g, index);

       // increase the index with one for the next item
       $wrapper.data('index', index + 1);
       newForm = newForm + '<a href="" class="js-remove-answers-item"> <i class="far fa-trash-alt"></i>Remove the answer</a>';
       newForm = '<td> <div class="js-training-answers-item">' + newForm + '</td> </div class="js-training-answers-item">';

       // Display the form in the page before the "new" link
       $(this).before(newForm);
    });
});


// JQuery function allowing to dynamicaly delete an answer in the training page
jQuery(document).ready(function() {
     var $wrapper = $('.js-training-answers-wrapper');
     $wrapper.on('click', '.js-remove-answers-item', function(e) {
         e.preventDefault();
         $(this).closest('.js-training-answers-item')
             .fadeOut()
             .remove();
     });
});
