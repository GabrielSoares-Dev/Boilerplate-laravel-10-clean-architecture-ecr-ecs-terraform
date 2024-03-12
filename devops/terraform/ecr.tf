resource "aws_ecr_repository" "main" {
  name                 = "${var.app_name}-${lower(var.environment)}"
  image_tag_mutability = "MUTABLE"

  image_scanning_configuration {
    scan_on_push = true
  }
}