var QuestionView = Backbone.View.extend({
	// Element type
	tagName: "aside",
	className: "question",

	events: {
		"click .yes-button": "doYes",
		"click .no-button": "doNo"
	},

	initialize: function(options) {
		// namespacing
		var me = this;

		// Grab the container
		this.container = options.container || '.question-container';

		// Build the templates
		this.questionTpl = _.template('<h5 class="qa">Readiness Question:<img src="images/tt.png" class="tooltip tt" title="Tooltip explanation here<br />More explanation"></h5><div class="flowchart"><div class="row"><div class="small-6 columns"><p><%= question %></p></div><div class="small-5 small-offset-1 columns"><ul><li><a href="#" class="button yes-button">yes</a></li><li><a href="#" class="button no-button">no</a></li></ul></div></div><div class="text-container" style="display:none;"></div></div>');
		this.responseTpl = _.template('<ul class="options"><% _.each(texts, function(text) { %><li><% if (text.link) { %>Review <a href="<%= text.link %>" title="<%= text.text %>"><% } %><%= text.text %><% if (text.link) { %></a><% } %></li><% }); %></ul>');

		// Grab a model
		this.questions = new QuestionCollection();

		// On loading the questions, grab the current question
		this.questions.on('data:loaded', function() {
			// Grab the question
			me.setCurrentQuestion(options.loadQuestionId);
			me.render();
		});
	},

	// Helper function to change the question
	setCurrentQuestion: function(questionId) {
		this.currentQuestion = this.questions.where({ id : questionId })[0];
	},

	render: function() {
		// Load in the current question
		this.$el.html(this.questionTpl({
			question: this.currentQuestion.get('question')
		})).css('display', 'none');
		this.$el.appendTo(this.container);

		// Fade in the view
		this.$el.fadeIn(300);

		// Adjust the tooltip
		this.$el.find('.tooltip').tooltipster();

		// Allow chaining
		return this;
	},

	buildText: function(options) {
		var me = this; // namespacing
		this.$el.find('.text-container').slideUp(300, function() {
			$(this).empty().append(me.responseTpl({ texts : options })).slideDown(300);
		});
	},

	doYes: function(e) {
		e.preventDefault();

		// Process the response
		this.processResponse('yes');
	},

	doNo: function(e) {
		e.preventDefault();

		// Process the response
		this.processResponse('no');
	},

	processResponse: function(response) {
		// Grab the parameters
		var params = this.currentQuestion.get(response)['params'];
		var me     = this; // namespacing
		switch (this.currentQuestion.get(response)['action']) {
			case 'loadQuestion':
				// Load in a new question
				this.setCurrentQuestion(params[0]);
				this.$el.fadeOut(300, function() {
					me.render();
				});

				break;

			case 'loadText':
				// Load in the text options
				this.buildText(params);

				break;
		}
	},
});