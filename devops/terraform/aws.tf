provider "aws" {
  region = "sa-east-1"

  default_tags {
    tags = {
      "owner"        = "DevopsTeam"
      "project-name" = "Boilerplate-laravel-10-clean-architecture-ecr-ecs-terraform-${lower(var.environment)}"
      "managed-by"   = "terraform"
    }
  }
}