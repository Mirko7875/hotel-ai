pipeline {
    agent any

    environment {
        IMAGE_NAME = "mirko122233334/hotel-ai"
        IMAGE_TAG = "latest"
    }

    stages {

        stage('Clone Repository') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/Mirko7875/hotel-ai.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                bat '''
                docker build -t %IMAGE_NAME%:%IMAGE_TAG% .
                '''
            }
        }

        stage('Login to Docker Hub') {
            steps {
                withCredentials([usernamePassword(
                    credentialsId: 'dockerhub-credentials',
                    usernameVariable: 'DOCKER_USERNAME',
                    passwordVariable: 'DOCKER_PASSWORD'
                )]) {
                    bat '''
                    docker login -u %DOCKER_USERNAME% -p %DOCKER_PASSWORD%
                    '''
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                bat '''
                docker push %IMAGE_NAME%:%IMAGE_TAG%
                '''
            }
        }
    }

    post {
        success {
            echo 'Pipeline completed successfully!'
        }

        failure {
            echo 'Pipeline failed!'
        }

        always {
            cleanWs()
        }
    }
}
