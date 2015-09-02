####################
# Run from web root:
# $ make
####################
# Name our phony targets
.PHONY: all

# Default
all:
	@chmod -R 0755 *.php
	@echo File permissions updated
