variable "environment" {
  type    = string
  default = "DEV"
}

variable "app_name" {
  type    = string
  default = "boilerplate-laravel-10-clean-architecture-ecr-ecs-terraform"
}

variable "aws_region" {
  type    = string
  default = "sa-east-1"
}