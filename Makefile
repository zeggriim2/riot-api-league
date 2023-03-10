## === 🆘  HELP ==================================================
help: ## Affiche les aides.
	@echo "Symfon-Makefile"
	@echo "---------------------------"
	@echo "Usage: make [target]"
	@echo ""
	@echo "Targets:"
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
#---------------------------------------------#

test: ## Test unitaire avec Code coverage
	vendor\bin\phpunit --coverage-html tests\coverage
.PHONY:test

cs-fix: ## FIXER
	vendor\bin\php-cs-fixer fix --allow-risky yes -vvv
.PHONY:cs-fixer