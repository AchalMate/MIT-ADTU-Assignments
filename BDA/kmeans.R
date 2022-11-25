getwd()

setwd('C:/Users/DELL/Desktop/R Project/')

getwd()

df <- read.csv("segmented_customers.csv")

head(df)

summary(df)

cluster <- df$cluster
print(cluster)

df <- subset(df, select = -c(CustomerID,cluster))

head(df)

df$Gender <- replace(df$Gender, df$Gender == "Male", 1)
df$Gender <- replace(df$Gender, df$Gender == "Female", 0)

head(df)

df$Gender <- ifelse(df$Gender == "Male",1,0)

head(df)

is.null(df)

df[,-1] <- scale(df[,-1])

head(df)


km <- kmeans(df,4,nstart = 20)
km

km$cluster


cm <- table(cluster , km$cluster)
cm


wss <- sapply(1:15,function(k){
  kmeans(df,k,nstart = 20,iter.max = 50)$tot.withinss
})

wss

plot(1:15,type="b", wss,xlab = "k values")


