####################
# Run from web root:
# $ make
####################
# Name our phony targets
.PHONY: all init

# Default
all: permissions update done
init: vendor env all

vendor:
	@echo -n composer install...
	@composer install
	@echo DONE

	@echo -n npm install...
	@npm install &> /dev/null
	@echo DONE

	@echo -n bower install...
	@bower install
	@echo DONE

env:
	@echo -n Copying env file...
	@php -r "copy('.env.example', '.env');"
	@chmod 0744 .env
	@echo DONE: Remember to update .env file

permissions:
	@echo -n Changing permissions...
	@chmod 777 ./bootstrap/cache
	@chmod 777 ./public/content
	@chmod 777 ./storage
	@chmod 777 ./storage/app
	@chmod 777 ./storage/framework
	@chmod 777 ./storage/framework/cache
	@chmod 777 ./storage/framework/sessions
	@chmod 777 ./storage/framework/views
	@chmod 777 ./storage/logs
	@chmod 777 ./tmp
	@chmod 777 ./vendor
	@echo DONE

update:
	@echo -n Clearing cache...
	@php artisan cache:clear --quiet
	@echo DONE

	@echo -n Generating optimized classloader...
	@php artisan clear-compiled --quiet
	@php artisan optimize --quiet
	@echo DONE

	@echo -n Running migrations...
	@php artisan migrate
	@echo DONE

done:
	@echo Ready to go!
