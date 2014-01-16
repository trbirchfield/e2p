var QuestionModel = Backbone.Model.extend({

});

var QuestionCollection = Backbone.Collection.extend({
	model: QuestionModel,

	initialize: function() {
		// Grab the data
		var me = this; // namespacing
		$.ajax({
			dataType: 'json',
			url: '/js/app/data/questions.json',
			success: function(data, textStatus, jqXHR) {
				// Assign each question to the model
				_.each(data['questions'], function(question) {
					me.add(new QuestionModel(question));
				});

				// Trigger the loaded
				me.trigger('data:loaded');
			}
		});
	}
})